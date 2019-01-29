<?php

return [
    'alipay' => [
        'app_id'         => '2016092300578070',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA2fbWcjx1mzbx6u/ZpqIjW79BiedfGMealFoRMQhS6B6GJ7Hwd+bEeo8YN4awVJ0bWe3VhZx3cZcWDT6KzQEzJ1AGw9ZU/l95sptBqIYYG7FlGvIzVwIiiiRskEuMhIVx8zjqV+AQwcMUgPZrkOq4YMeGHP3ViU3dn3DuaJncdyBX/A38arOgX6wpVb7cn5rK/inUUrXBta3QMm5FLaSNlX1ZwQXTbQlifsCFv4fWD6Sw6XnkzasaTpgZ6u91kVJ0P6wePSMh2edSjJTkA0I1wMopO14LeKA28+Muh1B691zUSNUQgRoCTUj8f0ZSEsgDlhdGY0XwdbAdnvx+qPQDjQIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEA0Mh52HdWHFspBhdUC4/93fLOaFMjN8Ix0zqPVjdZxK/EV1VVxqIFpEofHEh5suuvq/LEBrqNlye3ITUo9+/+8Tp04M7s6iePgwRBFBxdJPa5tzGLpJeN9BMraPJDl1LsBhrD2iOfWNtT+3wNga/4kgWcKSUFOTekKRJLW3S3pCT94rOnI5fJnHhDKeOEmtuU8z34gQyihXBzdBQb3AkikK7yOeLEwsMUSzDIf/X+Q7+v0tYiiB4JVwDTqx2t7XW6uV8/ED/pbRFV5BzpePLZMjA07NCH1f/qqDQvUj5RJvq5Y5uIXt9wgX6I8b643pcJnRY3IPqTrfW3AfxTVJq2gwIDAQABAoIBAEvIONHlnw/z1tQrK4p23YLuWxVq9+GJT2SIYPa+aIsH8ZBxnQzYSovzi49Mjz/uZHlZSOXYWQSAmewny5MTPcp5mWrwMPZdHa5EoQqXsQd1trtT9IftqszpGFyjcv0+UAV3OZe4TmKGWdlykcR9BxCZkLEuitLV63Qs+8VafD3Lt5xkuq8x6lkkgUUQ4G/CTy/BGy9SIRaDrGycgrQttIgqgoUyaEl5BIxAJMcvJ+GqMemhNHG8LllKFG4WXSC8fSL4rcBt2nQgRmu8oX0VQGikWq1KiE5Vn0UL+ZV2MGToCDdUtpgQvHdKNRlkO7gHfYoCf+AASwhzzNcRamIZxoECgYEA720WZTSeHzfdVtBpj47/w3n86k3VuAYeLw6TTzhBCau6F1XiyYoTUw5cn+zsGxU/fbqb1YWedWnbNdJ++iw7Hclk7zdBiHLYLHNhGEHPLGJYpdz0DL7Z59wNk+9U26FQQI+irSnUwcGXidbqdHCAYnybcNL1TlYgIz9mh4LFILMCgYEA3zxbtP+rxvF3jkZtMvvm2YBPh9iWLKdNwjg1LF5ittA32aU6QDoX0g4oj/r0X8AmMGruK+sH8xZWleF1IJZLNYBhccy6w56iFTVLy8Xlf86278VKfdYKcZJNy15D7HhyJ4/yrgrn8CM50IhIe2XrB4krVTGQlMGy/yGbw5pYWvECgYA9wV1tbUz7sGUe51LS/Idr3CMoLDtb4/gVGyVT4aak3+535mdApKSnX6T0ex/LPIfL3j4jrPtaPZuVHl4yGQaGgFPQf+gfUcAAdyIsJ41QXW2QGpW4U+HQtCmsZqb0n38bp/DFyWxfLZfwrcZ7kikLPii5yTAMrJpNfSTs/wXpkQKBgQC9ywxRM3oxN0SlUt0ulpprWzrCzXLIXimvMaiLo2eb9CU3xtFin8F21pDH8N3ptm0BhzgdYMKuetR8s2Woof8pao/ud9hlzq4RB/H8OrFnWzGPYxZ1LBBPBMtdVzS6jKDJYAo8zIrrUJer4uJ0/262RnnwAabhwllTrphG0ifCkQKBgC6V8F9XiJ4S66vKXlRiY9QQZPb1d9QBdiipYMSOU6M3nVK0giZ6+9UEVTtQ6bG2Cq5dH0UaY2hye/qWBb2os4aHAIe5Q3IWOI02f9Cyrc5ogaQyeXYvuoyKWp6/3y9ZJ/MUkqJCdfLx5jvQvuNrQeAKMkKGUqHuHNjSLdvRRVXZ',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
