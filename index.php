  public function page_footer($event)
   {
      $sql = 'SELECT user_id, user_avatar, user_avatar_type, user_avatar_width, user_avatar_height
         FROM ' . USERS_TABLE . '
         ORDER BY user_id DESC';
      $result = $this->db->sql_query_limit($sql, 1);
      $newest_avatar = $this->db->sql_fetchrow($result);
      $this->db->sql_freeresult($result);
      
      $this->template->assign_vars(array(
         'NEWEST_AVATAR'   => phpbb_get_user_avatar($newest_avatar),
      ));
   }
'NEWEST_USER_AVATAR'   => ($config['newest_user_avatar']) ? get_user_avatar($config['newest_user_avatar'], $config['newest_user_avatar_type'], ($config['newest_user_avatar_width'] > $config['newest_user_avatar_height']) ? 25 : (25 / $config['newest_user_avatar_height']) * $config['newest_user_avatar_width'], ($config['newest_user_avatar_height'] > $config['newest_user_avatar_width']) ? 25 : (25 / $config['newest_user_avatar_width']) * $config['newest_user_avatar_height']) : '<img src="http://i.epvpimg.com/SMyTc.png" width="25px;" height="25px;" alt="" />',