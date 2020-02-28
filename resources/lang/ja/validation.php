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

    'accepted' => ':attribute�����F���Ă��������B',
    'active_url' => ':attribute�ɐ�����URL����͂��Ă��������B',
    'after' => ':attribute��:date����̓��t����͂��Ă��������B',
    'after_or_equal' => ':attribute��:date�ȍ~�̓��t����͂��Ă��������B',
    'alpha' => ':attribute�͉p���œ��͂��Ă��������B',
    'alpha_dash' => ':attribute�͉p�����ƃn�C�t���A�A���_�[�o�[�݂̂œ��͂��Ă��������B',
    'alpha_num' => ':attribute�͉p�����œ��͂��Ă��������B',
    'array' => ':attribute�͔z��œ��͂��Ă��������B',
    'before' => ':attribute��:date���O�̓��t����͂��Ă��������B',
    'before_or_equal' => ':attribute��:date�ȑO�̓��t����͂��Ă��������B',
    'between' => [
        'numeric' => ':attribute��:min?:max�͈̔͂œ��͂��Ă��������B',
        'file' => ':attribute��:min?:max KB�̃t�@�C����I�����Ă��������B',
        'string' => ':attribute��:min?:max�����͈̔͂œ��͂��Ă��������B',
	'array' => ':attribute��:min?:max�͈͓̔��ɂ��Ă��������B',
    ],
    'boolean' => ':attribute��true��false�ɂ��Ă��������B',
    'confirmed' => ':attribute���m�F�p�ƈ�v���܂���B',
    'date' => ':attribute�𐳂������t�œ��͂��Ă��������B',
    'date_equals' => ':attribute��:date�ƈ�v����悤���͂��Ă��������B',
    'date_format' => ':attribute�̏�����:format�ɉ����ē��͂��Ă��������B',
    'different' => ':attribute��:other�͈Ⴄ���̂���͂��Ă��������B',
    'digits' => ':attribute��:digits���œ��͂��Ă��������B',
    'digits_between' => ':attribute��:min?:max���œ��͂��Ă��������B',
    'dimensions' => ':attribute�̉摜�T�C�Y���s���ł��B',
    'distinct' => ':attribute���d�����Ă��܂��B',
    'email' => ':attribute�𐳂����`���œ��͂��Ă��������B',
    'ends_with' => ':attribute��:values�ŏI���悤���͂��Ă��������B',
    'exists' => '�I�������l���s���ł��B',
    'file' => ':attribute�̓t�@�C����I�����Ă��������B',
    'filled' => ':attribute����͂��Ă��������B',
    'gt' => [
        'numeric' => ':attribute��:value��葽�����͂��Ă��������B',
        'file' => ':attribute��:value KB���傫���t�@�C����I�����Ă��������B',
        'string' => ':attribute��:value������葽�����͂��Ă��������B',
        'array' => ':attribute��:value��葽�����Ă��������B',
    ],
    'gte' => [
        'numeric' => ':attribute��:value�ȏ�œ��͂��Ă��������B',
        'file' => ':attribute��:value KB�ȏ�̃t�@�C����I�����Ă��������B',
        'string' => ':attribute��:value�����ȏ���͂��Ă��������B',
        'array' => ':attribute��:value�ȏ�ɂ��Ă��������B',
    ],
    'image' => ':attribute�͉摜�ɂ��Ă��������B',
    'in' => ':attribute�͕s���ł��B',
    'in_array' => ':attribute��:other�͈̔͊O�ł��B',
    'integer' => ':attribute�͐����œ��͂��Ă��������B',
    'ip' => ':attribute��IP�A�h���X�`���œ��͂��Ă��������B',
    'ipv4' => ':attribute��IPv4�`���œ��͂��Ă��������B',
    'ipv6' => ':attribute��IPv6�`���œ��͂��Ă��������B',
    'json' => ':attribute��JSON�`���œ��͂��Ă��������B',
    'lt' => [
	'numeric' => ':attribute��:value��菭�Ȃ����͂��Ă��������B',
        'file' => ':attribute��:value KB��菬�����t�@�C����I�����Ă��������B',
        'string' => ':attribute��:value������菭�Ȃ����͂��Ă��������B',
        'array' => ':attribute��:value��菭�Ȃ����Ă��������B',
    ],
    'lte' => [
        'numeric' => ':attribute��:value�ȉ��œ��͂��Ă��������B',
        'file' => ':attribute��:value KB�ȉ��̃t�@�C����I�����Ă��������B',
        'string' => ':attribute��:value�����ȉ����͂��Ă��������B',
        'array' => ':attribute��:value�ȉ��ɂ��Ă��������B',
    ],
    'max' => [
        'numeric' => ':attribute��:max�ȉ��œ��͂��Ă��������B',
        'file' => ':attribute��:max KB�ȉ��̃t�@�C����I�����Ă��������B',
        'string' => ':attribute��:max�����ȉ����͂��Ă��������B',
        'array' => ':attribute��:max�ȉ��ɂ��Ă��������B',
    ],
    'mimes' => ':attribute��:values�`���őI�����Ă��������B',
    'mimetypes' => ':attribute��:values�`���őI�����Ă��������B',
    'min' => [
        'numeric' => ':attribute��:min�ȏ�œ��͂��Ă��������B',
        'file' => ':attribute��:min KB�ȏ�̃t�@�C����I�����Ă��������B',
        'string' => ':attribute��:min�����ȏ���͂��Ă��������B',
        'array' => ':attribute��:min�ȏ�ɂ��Ă��������B',
    ],
    'not_in' => ':attribute�͕s���ł��B',
    'not_regex' => ':attribute�̏������s���ł��B',
    'numeric' => ':attribute�͐����œ��͂��Ă��������B',
    'present' => ':attribute�͑��݂���K�v������܂��B',
    'regex' => ':attribute�̏������s���ł��B',
    'required' => ':attribute����͂��Ă��������B',
    'required_if' => ':other��:value�̎��A:attribute����͂��Ă��������B',
    'required_unless' => ':other��:values�łȂ����A:attribute����͂��Ă��������B',
    'required_with' => ':values�����݂��鎞�A:attribute����͂��Ă��������B',
    'required_with_all' => ':values�����݂��鎞�A:attribute����͂��Ă��������B',
    'required_without' => ':values�����݂��Ȃ����A:attribute����͂��Ă��������B',
    'required_without_all' => ':values�����݂��Ȃ����A:attribute����͂��Ă��������B',
    'same' => ':attribute��:other����v����悤���͂��Ă��������B',
    'size' => [
        'numeric' => ':attribute��:size�œ��͂��Ă��������B',
	'file' => ':attribute��:size KB�̃t�@�C����I�����Ă��������B',
        'string' => ':attribute��:size�����œ��͂��Ă��������B',
        'array' => ':attribute��:size�ɂ��Ă��������B',
    ],
    'starts_with' => ':attribute��:values����n�܂�悤���͂��Ă��������B',
    'string' => ':attribute�͖�i�œ��͂��Ă��������B',
    'timezone' => ':attribute�𐳂����^�C���]�[���œ��͂��Ă��������B',
    'unique' => ':attribute�͊��Ɏ擾����Ă��邽�߁A�Ⴄ���̂���͂��Ă��������B',
    'uploaded' => ':attribute�̓A�b�v���[�h�Ɏ��s���܂����B',
    'url' => ':attribute�𐳂���URL�œ��͂��Ă��������B',
    'uuid' => ':attribute�𐳂���UUID�œ��͂��Ă��������B',

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

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
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

    'attributes' => [
        'email' => '���[���A�h���X',
	'password' => '�p�X���[�h',
    ],

];