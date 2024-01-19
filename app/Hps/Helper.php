<?php

use App\Hps\eDate;
use App\Hps\eHelper;
use App\Hps\eQuery;
use App\Hps\eTransaction;
use App\Http\Service\Media\MediaService;
use Illuminate\Http\Request;

if (! function_exists('images_src')) {
    function images_src($relative_link): string
    {
        if(!$relative_link){
            $relative_link = 'assets/images/no-img.png';
        }
        return env('MEDIA_DOMAIN').'/'.$relative_link;
    }
}

if (! function_exists('format_timestamp_to_date')) {
    function format_timestamp_to_date($timestamp)
    {
        return date('d/m/Y H:i:s', $timestamp);
    }
}

if (!function_exists('admin_link')) {
    function admin_link($router = '')
    {
        return url(str_replace('//', '/', '/' .'admin/'. $router));
    }
}

if (!function_exists('public_link')) {
    function public_link($router = '')
    {
        return url(str_replace('//', '/', '/' . $router));
    }
}

if (!function_exists('show_money')) {
    function show_money($value, $default = 'Chưa cập nhật'): string
    {
        if (is_numeric($value)) {
            if (empty($value)) {
                return $default;
            }
            return eHelper::getInstance()->formatMoney($value);
        }

        return $default;
    }
}


if (!function_exists('show_number')) {

    function show_number($value, $default = 'Chưa cập nhật')
    {
        if (is_numeric($value)) {
            if (empty($value)) {
                return $default;
            }
            return eHelper::getInstance()->formatNumber($value);
        }
        return $default;
    }
}

if (!function_exists('build_token')) {
    function build_token($id): string
    {
        return eHelper::getInstance()->buildTokenString($id);
    }
}

if (!function_exists('validate_token')) {
    function validate_token($string): bool
    {
        return eHelper::getInstance()->validateToken($string);
    }
}

if (! function_exists('media_absolute_link')) {
    function media_absolute_link($link): string
    {
        return asset($link);
    }
}

if (!function_exists('value_show')) {
    function value_show($value, $default = '---')
    {
        if (is_string($value) || is_numeric($value)) {
            if (empty($value)) {
                return $default;
            }
            return $value;
        }
        if (is_array($value)) {
            if (isset($value['name']) && is_string($value['name'])) {
                return $value['name'];
            } else if (isset($value['value']) && is_string($value['value'])) {
                return $value['value'];
            } else {
                return $default;
            }
        }

        return $default;
    }
}

if (!function_exists('show_int_date')) {
    function show_int_date($date, $format = 'd/m/Y H:i:s'): string
    {
        if ($date) {
            return eDate::getInstance()->dateFormat($date, $format);
        }
        return 'd/m/Y H:i:s';
    }
}

if (!function_exists('convert_date_to_int')) {
    function convert_date_to_int($date, $end = false, $start = false)
    {
        return eDate::getInstance()->getTimestampFromVNDate($date, $end, $start);
    }
}

if (!function_exists('check_info_query')) {
    function check_info_query()
    {
        eQuery::getInstance()->check_query();
    }
}

if (!function_exists('get_info_query')) {
    function get_info_query()
    {
        eQuery::getInstance()->get_query();
    }
}

if (! function_exists('isLink')) {
    function isLink($link)
    {
        return filter_var($link, FILTER_VALIDATE_URL);
    }
}

if (! function_exists('get_file_extension')) {
    function get_file_extension($file)
    {
        $pos = strrpos($file, '.');
        if (!$pos) {
            return FALSE;
        }
        $str = substr($file, $pos, strlen($file));

        return strtolower($str);
    }
}

if (!function_exists('begin_transaction')) {
    function begin_transaction()
    {
        eTransaction::getInstance()->begin_transaction();
    }
}

if (!function_exists('transaction_commit')) {
    function transaction_commit()
    {
        eTransaction::getInstance()->transaction_commit();
    }
}

if (!function_exists('transaction_roll_back')) {
    function transaction_roll_back()
    {
        eTransaction::getInstance()->transaction_roll_back();
    }
}


if (!function_exists('where_like')) {
    function where_like($query, $attr, $name)
    {
        return $query->where($attr, 'LIKE', "%{$name}%");
    }
}

if (!function_exists('check_request_field')) {
    function check_request_field(Request $request, $field): bool
    {
        if ($request->has($field) && !empty($request->filled($field))) {
            return true;
        } else {
            return false;
        }
    }
}

if (! function_exists('get_img_video_youtobe')) {
    function get_img_video_youtobe($video_id): string
    {
        return 'https://i.ytimg.com/vi/'.$video_id.'/hqdefault.jpg';
    }
}

if (! function_exists('show_img')) {
    function show_img($src = '',$fullurl = true, $sizeName = false): string
    {
        return MediaService::getImageSrc($src, $fullurl,$sizeName) ;
    }
}

if (! function_exists('format_money')) {
    function format_money ($money)
    {
        return \App\Hps\eHelper::formatMoney($money);
    }
}

if (! function_exists('format_money_vnd')) {
    function format_money_vnd ($money)
    {
        return \App\Hps\eHelper::formatMoney($money,  $sep = '.', $₫ = ' VNĐ');
    }
}



if (! function_exists('get_link_html')) {
    function get_link_html($link): string
    {
        if(!$link) {
            return 'javascript:void(0)';
        }
        return $link.'.html';
    }
}


if (! function_exists('get_link_share_facebook')) {
    function get_link_share_facebook($link): string
    {
        if(!$link) {
            return 'javascript:void(0)';
        }
        return 'http://www.facebook.com/share.php?u=https://dieuhoanamviet.com/'.$link.'.html';
    }
}



if (! function_exists('get_link_cate')) {
    function get_link_cate($link = ''): string
    {
        if(!$link) {
            return 'javascript:void(0)';
        }
        return $link.'.c';
    }
}

if (! function_exists('get_link_product')) {
    function get_link_product($link = ''): string
    {
        if(!$link) {
            return 'javascript:void(0)';
        }
        return $link.'.p';
    }
}

if (!function_exists('process_range_date')) {
    function process_range_date($time, $time_format = 'mongodb', $spliter = 'to', $range = true)
    {
        if (is_string($time) && $time) {
            $updated_at_arr = explode($spliter, $time);
            if (!isset($updated_at_arr[1]) && $range == true) {
                $updated_at_arr[1] = $updated_at_arr[0];//tìm trong ngày
            }
            if ($updated_at_arr && isset($updated_at_arr[0]) && isset($updated_at_arr[1])) {
                $timeStart = trim($updated_at_arr[0]);
                $timeEnd = trim($updated_at_arr[1]);
                if (eDate::validateDateTime($timeStart, 'd/m/Y') && eDate::validateDateTime($timeEnd, 'd/m/Y')) {
                    if ($time_format === 'int') {
                        $timeStart = show_int_date($timeStart, false);
                        $timeEnd = show_int_date($timeEnd, true);
                    }
                    return [
                        'time_start' => $timeStart,
                        'time_end' => $timeEnd,
                    ];
                }
            }
        }
    }
}

if (! function_exists('dequyrele')) {
    function dequyrele($rele, $item, $i = 0, &$data = []): int
    {
        foreach ($rele as $key) {
            if ($i == count($rele)) {
                return 0;
            }
            if ($data) {
                $data = $data[$key];
            } else {
                $data = $item[$key];
            }
            $i++;
        }
        return dequyrele($rele, $item, $i, $data);
    }
}

if (! function_exists('generate_product_code')) {
    function generate_product_code(): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = '';
        $length = rand(5, 7);
        for ($i = 0; $i < $length; $i++) {
            $code .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $code;
    }
}

function show_tag($tag): string
{
    return $tag.'.tag';
}


