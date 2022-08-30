<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    "accepted" => "必須同意 :Attribute",
    "accepted_if" => "當 :Other 欄位值是 :value 時，必須同意 :Attribute",
    "active_url" => ":Attribute 不是可用連結",
    "after" => ":Attribute 必須晚於 :date.",
    "after_or_equal" => ":Attribute 必須等於或晚於 :date",
    "alpha" => ":Attribute 只能填入文字",
    "alpha_dash" => ":Attribute 只能填入文字、數字、破折號及底線",
    "alpha_num" => ":Attribute 只能填入文字及數字",
    "array" => ":Attribute 必須是陣列型式",
    "before" => ":Attribute 必須早於 :date",
    "before_or_equal" => ":Attribute 必須早於或等於 :date",
    "between" => [
        "array" => ":Attribute 元素數量必須介於 :min 到 :max 個元素之間",
        "file" => ":Attribute 檔案大小必須介於 :min 和 :max KB",
        "numeric" => ":Attribute 必須介於 :min 和 :max 之間",
        "string" => ":Attribute 長度必須介於 :min 到 :max 個文字之間",
    ],
    "boolean" => ":Attribute 必須是布林值",
    "confirmed" => ":Attribute 與 確認:Attribute 不相符",
    "current_password" => "密碼與系統紀錄不符",
    "date" => ":Attribute 不是一個合規範的日期",
    "date_equals" => ":Attribute 必須是日期格式且等於 :date",
    "date_format" => ":Attribute 不符合日期格式: :format",
    "declined" => "必須拒絕 :Attribute",
    "declined_if" => "當 :Other 欄位值是 :value 時，必須拒絕 :Attribute",
    "different" => ":Attribute 和 :Other 必須不同",
    "digits" => ":Attribute 長度必須是 :digits 位",
    "digits_between" => ":Attribute 長度必須介於 :min 和 :max 位",
    "dimensions" => ":Attribute 尺寸不合",
    "distinct" => ":Attribute 有重複值",
    "doesnt_end_with" => ":Attribute 不能以 :values 其中一種結束",
    "doesnt_start_with" => ":Attribute 不能以 :values 其中一種開始",
    "email" => ":Attribute 必須是有效的電子郵件信箱",
    "ends_with" => ":Attribute 必須以 :values 其中一種結束",
    "enum" => ":Attribute 所選擇的值是無效的",
    "exists" => "選中的 :Attribute 無效的",
    "file" => ":Attribute 必須是檔案格式",
    "filled" => ":Attribute 必須有值",
    "gt" => [
        "array" => ":Attribute 元素數量必須大於 :value 個元素",
        "file" => ":Attribute 檔案大小必須大於 :value KB.",
        "numeric" => ":Attribute 必須大於 :value.",
        "string" => ":Attribute 長度必須大於 :value 個文字",
    ],
    "gte" => [
        "array" => ":Attribute 元素數量必須大於等於 :value 個元素",
        "file" => ":Attribute 檔案大小必須大於等於 :value KB",
        "numeric" => ":Attribute 必須大於等於 :value.",
        "string" => ":Attribute 長度必須大於等於 :value 個文字",
    ],
    "image" => ":Attribute 必須是圖片檔",
    "in" => "選中的 :Attribute 是無效的",
    "in_array" => ":Other 內沒有 :Attribute 元素",
    "integer" => ":Attribute 必須是整數",
    "ip" => ":Attribute 必須是有效的IP位址",
    "ipv4" => ":Attribute 必須是有效的IPv4位址",
    "ipv6" => ":Attribute 必須是有效的IPv6位址",
    "json" => ":Attribute 必須是有效的JSON格式",
    "lt" => [
        "array" => ":Attribute 元素數量必須小於 :value 個元素",
        "file" => ":Attribute 檔案大小必須小於 :value KB",
        "numeric" => ":Attribute 必須小於 :value.",
        "string" => ":Attribute 長度必須小於 :value 個文字",
    ],
    "lte" => [
        "array" => ":Attribute 元素數量必須小於 :value 個元素",
        "file" => ":Attribute 檔案大小必須小於等於 :value KB",
        "numeric" => ":Attribute 必須小於 :value.",
        "string" => ":Attribute 長度必須小於 :value 個文字",
    ],
    "mac_address" => ":Attribute 必須是有效的 MAC 位址",
    "max" => [
        "array" => ":Attribute 元素長度不能超過 :max 個元素",
        "file" => ":Attribute 檔案大小不能超過 :max KB",
        "numeric" => ":Attribute 不能超過 :max.",
        "string" => ":Attribute 長度不能超過 :max 個文字",
    ],
    "mimes" => ":Attribute 必須屬於 :values 檔案格式",
    "mimetypes" => ":Attribute 必須屬於 :values 檔案格式",
    "min" => [
        "array" => ":Attribute 元素數量必須超過 :min 個元素",
        "file" => ":Attribute 檔案大小必須超過 :min KB",
        "numeric" => ":Attribute 必須超過 :min.",
        "string" => ":Attribute 長度必須超過 :min 個文字",
    ],
    "multiple_of" => ":Attribute 必須是 :value 的倍數",
    "not_in" => "選中的 :Attribute 是無效的",
    "not_regex" => ":Attribute 字串型式是無效的",
    "numeric" => ":Attribute 必須是數字",
    "password" => [
        "letters" => ":Attribute 必須包含至少一個英文字母",
        "mixed" => ":Attribute 必須至少包含一個大寫英文字母及一個小寫英文字母",
        "numbers" => ":Attribute 必須至少包含一個數字",
        "symbols" => ":Attribute 必須至少包含一個特殊符號",
        "uncompromised" =>
            ":Attribute 提供的值存在資安風險。請選擇另一個 :attribute.",
    ],
    "present" => "必須呈現 :Attribute 欄位",
    "prohibited" => "不可有 :Attribute 欄位",
    "prohibited_if" => "當 :Other 欄位值是 :value 時，不可有 :Attribute 欄位",
    "prohibited_unless" =>
        "除非 :Other 欄位值是 :value 時，不可有 :Attribute 欄位",
    "prohibits" => "當有 :Other 欄位時，不可有 :Attribute 欄位",
    "regex" => ":Attribute 字串型式是無效的",
    "required" => ":Attribute 是必填欄位",
    "required_array_keys" => ":Attribute 必須包含以下鍵值： :values",
    "required_if" => ":Attribute 是必填欄位，當 :Other 欄位的值是 :value",
    "required_unless" => ":Attribute 是必填欄位，除非 :Other 欄位是 :values",
    "required_with" => ":Attribute 是必填欄位，當 :values 欄位存在",
    "required_with_all" => ":Attribute 是必填欄位，當 :values 欄位存在",
    "required_without" => ":Attribute 是必填欄位，當 :values 欄位不存在",
    "required_without_all" => ":Attribute 是必填欄位，當 :values 欄位不存在",
    "same" => ":Attribute 和 :Other 不相符",
    "size" => [
        "array" => ":Attribute 必須包含 :size 個元素",
        "file" => ":Attribute 檔案大小必須是 :size KB",
        "numeric" => ":Attribute 必須是 :size.",
        "string" => ":Attribute 長度必須是 :size 個文字",
    ],
    "starts_with" => ":Attribute 必須以 :values 開始",
    "string" => ":Attribute 必須是字串型式",
    "timezone" => ":Attribute 必須是有效的時區",
    "unique" => "已有此 :Attribute 紀錄，請使用其他 :Attribute",
    "uploaded" => ":Attribute 上傳未通過",
    "url" => ":Attribute 是無效的格式",
    "uuid" => ":Attribute 必須是有效的 UUID",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    "custom" => [
        "attribute-name" => [
            "rule-name" => "custom-message",
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    "attributes" => [],
];
