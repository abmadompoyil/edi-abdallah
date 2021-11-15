<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;

class Front_en extends Model
{
    protected $table = 'front_page_en';
    protected $fillable = [
        'header_Title',	'header_subTitle'	,'header_btn1',	'header_btn2',	'header_btn1_url'	,'header_btn2_url',	'icon_1_icon'	,
        'icon_2_icon',	'icon_3_icon'	,'icon_4_icon'	,'icon_1_text',	'icon_2_text'	,'icon_3_text',	'icon_4_text'	,'section2_title',
        'section2_sub_title',	'section2_service_id',	'video_url'	,'section3_title',	'section3_sub_title'	,'section3_question_id'	,'section4_title',
        'section4_sub_title'	,'section4_btn1_text'	,'section4_btn2_text'	,'section4_btn1_url'	,'section4_btn2_url'	,'contact_title',	'contact_sub_title',
        'contact_address_title',	'contact_address_sub_title',	'contact_phone'	,'contact_email',	'facebook'	,'instagram'	,'whatsapp',	'snapchat',	'twitter'    ];
    public function user()
    {
        return $this->hasMany('App\User');
    }
}
