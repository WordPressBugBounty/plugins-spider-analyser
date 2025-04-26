<?php

/**
 * 插件通用方法
 * Author: wbolt team
 * Author URI: https://www.wbolt.com
 */

class WBP
{

  public static function init() {}

  // 计算本地化key
  public static function set_localize_key($text = '')
  {
    $input = mb_convert_encoding($text, 'UTF-8');
    return hash('crc32b', $input);
  }

  // 获取缓存
  public static function cache_get($key, $group = 'wb_cache_plugin')
  {
    if (self::has_object_cache()) {
      return wp_cache_get($key, $group);
    }

    return get_transient($key);
  }

  // 设置缓存
  public static function cache_set($key, $value, $group = 'wb_cache_plugin', $expire = HOUR_IN_SECONDS)
  {
    if (self::has_object_cache()) {
      wp_cache_set($key, $value, $group, $expire);
    } else {
      set_transient($key, $value, $expire);
    }
  }

  // 清除缓存
  public static function cache_delete($key, $group = 'wb_cache_plugin')
  {

    if (self::has_object_cache()) {
      wp_cache_delete($key, $group);
    } else {
      delete_transient($key);
    }
  }

  // 重置缓存
  public static function cache_reset($group = 'wb_cache_plugin', $slug = 'wb_cache')
  {
    if (self::has_object_cache()) {
      if (wp_cache_supports('flush_group')) {
        wp_cache_flush_group($group);
      } else {
        wp_cache_flush();
      }
    } else {
      self::delete_all_transients($slug);
    }
  }

  public static function has_object_cache()
  {
    static $has_cache = null;

    if (null === $has_cache) {
      $has_cache = wp_using_ext_object_cache();

      // 双重验证防止错误配置
      if ($has_cache && !file_exists(WP_CONTENT_DIR . '/object-cache.php')) {
        $has_cache = false;
      }
    }

    return $has_cache;
  }

  public static function delete_all_transients($slug)
  {
    global $wpdb;

    // 删除普通 transient
    $query = $wpdb->prepare(
      "DELETE FROM $wpdb->options 
        WHERE option_name LIKE %s 
        OR option_name LIKE %s",
      '_transient_' . $slug . '_%',
      '_transient_timeout_' . $slug . '_%'
    );
    $wpdb->query($query);
  }
}
