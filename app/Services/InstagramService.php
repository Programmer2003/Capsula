<?php

namespace App\Services;

use App\Models\InstagramPost;
use App\Models\InstagramUser;
use Carbon\Carbon;

class InstagramService
{
    public function getAccessToken()
    {
        $user = InstagramUser::first(); // получаем токен из базы

        if (!$user) { //Когда в бд нет записей
            //Создадим свою
            $user = InstagramUser::create([
                'username' => 'belcoopsoyuz',
                'token_expired_at' => now()->addMonths(2),
                //Ввести токен, который был получен
                'access_token' => 'IGQVJWc1lEU2t1b190eGhRcmE1RU8zRXFjUkxRN0pVV09rMVFiOHlkWjFyNmdaeG5oVHNxcEhQc3d4ZAHV6Rk16YWFhdFVuMHEyRUJTOGNvRTdRQ3BWWVU0bzI1eERxMlZAnRjhReVMyYm02RUZABVFVJUQZDZD',
            ]);
        }

        $accessToken = $user->access_token; //получаем сам токен
        $tokenEndDate = $user->token_expired_at; // получаем дату окончания из базы
        $tokenTimestamp = strtotime($tokenEndDate);
        $curTimestamp = time();
        $dayDiff = ($tokenTimestamp - $curTimestamp) / 86400;

        if ($dayDiff < 10) { // Если токену осталось менее 10 дней, то обновляем его
            $this->updateAccessToken($user, $accessToken);
        }

        return $accessToken;
    }

    public function updateAccessToken(InstagramUser $user, $accessToken)
    {
        // Запрос на обновление токена
        $url = "https://graph.instagram.com/refresh_access_token?grant_type=ig_refresh_token&access_token=" . $accessToken;

        $instagramCnct = curl_init();
        curl_setopt($instagramCnct, CURLOPT_URL, $url);
        curl_setopt($instagramCnct, CURLOPT_RETURNTRANSFER, 1);
        $response = json_decode(curl_exec($instagramCnct));
        curl_close($instagramCnct);

        $accessToken = $response->access_token; // обновленный токен

        $user->update([
            'access_token' => $accessToken,
            'token_expired_at' => now()->addSeconds($response->expires_in),
        ]);
    }

    public function callApi($count = 10)
    {

        $accessToken = $this->getAccessToken();

        $url = "https://graph.instagram.com/me/media?fields=id,media_type,media_url,caption,timestamp,thumbnail_url,permalink,children{fields=id,media_url,thumbnail_url,permalink}"
            . "&limit=" . $count
            . "&access_token=" . $accessToken;
        $instagramCnct = curl_init();
        curl_setopt($instagramCnct, CURLOPT_URL, $url);
        curl_setopt($instagramCnct, CURLOPT_RETURNTRANSFER, 1);
        $media = json_decode(curl_exec($instagramCnct));
        curl_close($instagramCnct);

        return $media;
    }

    public function getPosts($count = 10)
    {
        if (!InstagramPost::max('updated_at') || Carbon::now()->diffInMinutes(InstagramPost::max('updated_at')) > 5) {
            $this->updatePosts();
        }

        return InstagramPost::inRandomOrder()->limit($count)->get();
    }

    public function updatePosts()
    {
        $items = $this->callApi(100);
        foreach ($items->data ?? [] as $item) {
            $post = array();
            if (property_exists($item, 'id')) {
                $post['media_id'] = $item->id;
            } else {
                continue;
            }
            $post['permalink'] = property_exists($item, 'permalink') ? $item->permalink : "";
            $post['caption'] = property_exists($item, 'caption') ? $item->caption : "";
            $post['likes_count'] = property_exists($item, 'likes_count') ? $item->caption : 0;
            $post['comments_count'] = property_exists($item, 'comments_count') ? $item->caption : 0;
            $post['updated_at'] = now()->toDateTimeString();
            switch ($item->media_type) {
                case 'CAROUSEL_ALBUM':
                case 'IMAGE':
                    $post['image'] = property_exists($item, 'media_url') ? $item->media_url : "";
                    break;
                case 'VIDEO':
                    $post['image'] = property_exists($item, 'thumbnail_url') ? $item->thumbnail_url : "";
                    break;
                default:
                    break;
            }
            $a = InstagramPost::updateOrCreate(['media_id' => $post['media_id']], $post);
        }
    }
}
