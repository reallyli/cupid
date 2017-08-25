$(document)
    .ready(function() {
        $('.ui.form')
            .form({
                fields: {
                    email: {
                        identifier  : 'email',
                        rules: [
                            {
                                type   : 'empty',
                                prompt : '请输入邮箱地址'
                            },
                            {
                                type   : 'email',
                                prompt : '请输入正确的邮箱格式'
                            }
                        ]
                    },
                    password: {
                        identifier  : 'password',
                        rules: [
                            {
                                type   : 'empty',
                                prompt : '请输入密码'
                            },
                            {
                                type   : 'length[6]',
                                prompt : '密码长度必须大于6个字节'
                            }
                        ]
                    }
                }
            })
        ;

        $('.image').attr('src', './project/images/logo.jpg');
    })
;