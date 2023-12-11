<?php

class Helper
{
    const STATUS_ACTIVE = 1;
    const STATUS_DISABLED = 0;
    const STATUS_ACTIVE_TEXT = 'Active';
    const STATUS_DISABLED_TEXT = 'Disabled';
    const STATUS_ACTIV_TEXT = 'Đã Thanh Toán';
    const STATUS_DISABLE_TEXT = 'Chưa Thanh Toán';
    const STATUS_ACTI_TEXT = 'Hiển thị ở trang chủ';
    const STATUS_DISA_TEXT = 'Không hiện ở trang chủ';
    const STATUS_ACTIVE1_TEXT = 'Admin';
    const STATUS_DISABLED1_TEXT = 'User';

    /**
     * Get status text
     * @param int $status
     * @return string
     */
    public static function getStatusText($status = 0) {
        $status_text = '';
        switch ($status) {
            case self::STATUS_ACTIVE:
                $status_text = self::STATUS_ACTIVE_TEXT;
                break;
            case self::STATUS_DISABLED:
                $status_text = self::STATUS_DISABLED_TEXT;
                break;
        }
        return $status_text;
    }
    public static function getpaymentStatusText($status = 0) {
        $status_text = '';
        switch ($status) {
            case self::STATUS_ACTIVE:
                $status_text = self::STATUS_ACTIV_TEXT;
                break;
            case self::STATUS_DISABLED:
                $status_text = self::STATUS_DISABLE_TEXT;
                break;
        }
        return $status_text;
    }
    public static function getnewText($is_home = 0) {
        $is_home_text = '';
        switch ($is_home) {
            case self::STATUS_ACTIVE:
                $is_home_text = self::STATUS_ACTI_TEXT;
                break;
            case self::STATUS_DISABLED:
                $is_home_text = self::STATUS_DISA_TEXT;
                break;
        }
        return $is_home_text;
    }
    public static function getquyenhan($quyenhan = 0) {
        $quyenhan_text = '';
        switch ($quyenhan) {
            case self::STATUS_ACTIVE:
                $quyenhan_text = self::STATUS_ACTIVE1_TEXT;
                break;
            case self::STATUS_DISABLED:
                $quyenhan_text = self::STATUS_DISABLED1_TEXT;
                break;
        }
        return $quyenhan_text;
    }

  public static function getSlug($str) {
    $str = trim(mb_strtolower($str));
    $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
    $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
    $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
    $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
    $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
    $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
    $str = preg_replace('/(đ)/', 'd', $str);
    $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
    $str = preg_replace('/([\s]+)/', '-', $str);
    return $str;
  }

}