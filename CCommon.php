<?php
    
    // 入力確認
    //////////////////////////////
    function inputCheck ($post) {
        try {
            // キャッチコピー
            if (empty($post["catch_copy"])) {
                $post["error"]["catch_copy"] = "none";
            }
            
            // メッセージ１
            if (empty($post["message_1"])) {
                $post["error"]["message_1"] = "none";
            }
            
            // メッセージ２
            if (empty($post["message_2"])) {
                $post["error"]["message_2"] = "none";
            }
            
            // メッセージ３
            if (empty($post["message_3"])) {
                $post["error"]["message_3"] = "none";
            }
            
            // 住所
            if (empty($post["address"])) {
                $post["error"]["address"] = "none";
            }
            
            // 電話番号
            if (!empty($post["tel"])) {
                $tel = $post["tel"];
            } else {
                $post["error"]["tel"] = "none";
            }
            
            // 営業時間
            if (empty($post["time"])) {
                $post["error"]["time"] = "none";
            }
            
            // 定休日
            if (empty($post["holiday"])) {
                $post["error"]["holiday"] = "none";
            }
            
            // 年
            if (empty($post["year"])) {
                $post["error_info"]["year"] = "none";
            }
            
            // 月
            if (empty($post["month"])) {
                $post["error_info"]["month"] = "none";
            }
            
            // 日
            if (empty($post["day"])) {
                $post["error_info"]["day"] = "none";
            }
            
            // インフォメーション
            if (empty($post["info"])) {
                $post["error_info"]["info"] = "none";
            }

            return $post;
        } catch (Exception $e) {
            throw new Exception ("入力確認エラー:" . $e->getMessage());
        }
    }

    // htmlspecialchars
    //////////////////////////////
    function h ($str) {
        return htmlspecialchars($str, ENT_QUOTES, "utf-8");
    }

?>