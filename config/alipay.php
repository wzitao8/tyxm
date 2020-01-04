<?php
	return [	
		//应用ID,您的APPID。
		'app_id' => "2016092500595564",

		//商户私钥，您的原始格式RSA私钥
		'merchant_private_key' => "MIIEowIBAAKCAQEAwr7ezTIlAK0d3y5R93tAT/YFEgK3k6y7aoUBppOYw+zcYczIAWeNbm/TgjL3HHvj640PnTwjwGE9+LlYmiccNe9iF7f0YTPioXzBQjwmpHRAxZw6qqCAuMrBZhk97DdIfywPh3tapF6P8+/Gmb+SIdrths6f6rGj7iI8YgSqinJisQfXAnPQWJGE6mX9uTfYtdA+3VwFNpZEZzsrI9Q/8xYj/Qt2eFC6OO///u+aWT20ADsVlrvVHAW5FgKqRKb4bo960EYunprTgrCX+QBKApSCP14Gqd39t4VbBa8mkKc9sx2181dPK5RepHzv6wNhdbrU05FiCvsyo3Yi4bNkCwIDAQABAoIBAGdUSPlNMu7x69igRiNuxQfoPHZ69JapXuO84MxWogbK5YAK3NBJ9nPzZ6E8k3sMjTlNJkzCPSH1NqGDDmz0dXZ0pnJ5S3RLyGLww8X2DnbRrBBtvX8NHF9wTT90AzQTfSbk5PR40fZGqlC/F3w6djn6ZG9TsOwhBx7yEWHcofREoTean/EjOLAyaTO4+nkB/gRGgK+qYzOIEIom4gsF2tOoXnEdf2ccuNY6hyo6kITq7VWAgIA+8w/8UtmQvaj1WKX7B3BlIC0ja78HC3CK+L2RIxBQ4Y3z72yt4VEdgFH/ccMEarwOvI9zjv2HmQhjPB2TCYb8Ue0gZke2JGHuO0kCgYEA8j1xIPUqrjZS8WF8FjbNWxTDY4X26Cne7bvOZf5ETeqeSx6t+Ar2rS3SnMr1gwKAGvxoQYY7s0Jqc5e1IuTBQxys8h+FlM17XiHCjAk5K2j32km1djc99RgUYltRxj8wJXp3+h5bTYpI8HhywzR/F5v6G0XnlNEu1tDbHfxbPocCgYEAzc7IjE+YJNrJrdLbS+9e41OGMNXfybvwHxPLF07GlIgO4OeGJorE/+UrDlAu0AMLtQCSG9TXt1CD59O4XW9wQd20/yZZbNNXgauAXvf7w2rTvdYTY2h2QFlQ0GNJIKAnATvN7MVycTUpBFeW1j74VwIJaNBT32Y7rU/tJFTLK10CgYEAj+i8io3b2z9eqxP0+eV4vkFpiniNpIMrcyR9i84wmfFmNM53H8KzpVJxqsBQdpJHtMB612J9mRM91oosDBzGS65/eCAN5cblIZkA0Nyx3/4uMLpVWXOcFT1G7t+9hv8HBVzqZece6sPabTHBTAKl9kqtnQI8gAZ9wxS09+1x74UCgYByekEneuagKWrhW1ZMKLvZKw6Lf4vZhMaOIs5nCpR+7ieIhoAiVDI8PNb0QTmozujmJ4keHghXmVulyijVIDWLDa2t90DqvawBHsprCPlru7JH+BoUw3hzVrsTDwcQNMU9dGyY9UMxIWbNWYM3bRNqImHlgWwF6bHsN3crLFdOqQKBgCPskwP22pJY8UpFYx00hQnqYsFxyBMLC4HIPXLGWfRSmMWxuqGx5HCZ0e+kiYrdS/DAdTlZz7YcjyQLDM1xol0SNL8xr57Jp52mj/m4MLA2YVfwbOrwktdajGbhBCLKNBWO4a1p73QiIRQgz5VZqTkqYP66yEfZ1w2tT2ZfuLbn",
		
		//异步通知地址
		'notify_url' => "http://alipay/notify_url.php",
		
		//同步跳转
		'return_url' => "http://www.blog.com/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwr7ezTIlAK0d3y5R93tAT/YFEgK3k6y7aoUBppOYw+zcYczIAWeNbm/TgjL3HHvj640PnTwjwGE9+LlYmiccNe9iF7f0YTPioXzBQjwmpHRAxZw6qqCAuMrBZhk97DdIfywPh3tapF6P8+/Gmb+SIdrths6f6rGj7iI8YgSqinJisQfXAnPQWJGE6mX9uTfYtdA+3VwFNpZEZzsrI9Q/8xYj/Qt2eFC6OO///u+aWT20ADsVlrvVHAW5FgKqRKb4bo960EYunprTgrCX+QBKApSCP14Gqd39t4VbBa8mkKc9sx2181dPK5RepHzv6wNhdbrU05FiCvsyo3Yi4bNkCwIDAQAB",
		
	
	];