<?php
// 本类由系统自动生成，仅供测试用途
class TestcardAction extends HCommonAction {
	// public function shoufan(){
		// import("@.Oauth.sina.Weibopay");
        // $payConfig = FS("Webconfig/payconfig");
        // $weibopay = new Weibopay();
        // $data['service']              = "create_hosting_collect_trade";                            //接口名称
        // $data['version']              = $payConfig['sinapay']['version'];                        //接口版本
        // $data['request_time']         = date('YmdHis');                                            //请求时间
        // $data['partner_id']           = $payConfig['sinapay']['partner_id'];                    //合作者身份ID
        // $data['_input_charset']       = $payConfig['sinapay']['_input_charset'];                //网站编码格式
        // $data['sign_type']            = $payConfig['sinapay']['sign_type'];                        //签名方式 MD5
        // $data['out_trade_no']         = date('YmdHis').mt_rand(100000, 999999);                // 交易订单号
        // $data['out_trade_code']       = '1001';                                                    //交易码
        // $data['summary']              = "陈晓升蔡晓佳返现金额共33629.81";                //摘要
        // $data['payer_id']             = $payConfig['sinapay']['email'];                            //付款人邮箱
        // $data['payer_identity_type']  = 'EMAIL';                                                //ID类型
        // $data['payer_ip']=get_client_ip();
        // $data['pay_method']              = "balance^33629.81^BASIC";                                //支付方式：支付方式^金额^扩展|支付方式^金额^扩展。扩展信息内容以“，”分隔
        // ksort($data);
        // $data['sign']                  = $weibopay->getSignMsg($data, $data['sign_type']);        //计算签名
        // $setdata                      = $weibopay->createcurl_data($data);
        // $result                          = $weibopay->curlPost($payConfig['sinapay']['mas'], $setdata);//模拟表单提交
        // $rs = checksinaerror($result);
        // print_r($rs);
	// }

	// public function fanchen(){
		// import("@.Oauth.sina.Weibopay");
        // $payConfig = FS("Webconfig/payconfig");
        // $weibopay = new Weibopay();
        // $data['service']              = "create_single_hosting_pay_trade";                        //接口名称
        // $data['version']              = $payConfig['sinapay']['version'];                        //接口版本
        // $data['request_time']          = date('YmdHis');                                            //请求时间
        // $data['user_ip']              = get_client_ip();                                                //用户IP地址
        // $data['partner_id']          = $payConfig['sinapay']['partner_id'];                    //合作者身份ID
        // $data['_input_charset']      = $payConfig['sinapay']['_input_charset'];                //网站编码格式
        // $data['sign_type']          = $payConfig['sinapay']['sign_type'];                        //签名方式 MD5
        // $data['out_trade_no']        = date('YmdHis').mt_rand(100000, 999999);                // 交易订单号
        // $data['out_trade_code']      = '2001';                                                    //交易码
        // $data['amount']              = '20496.56';                                                    //金额
        // $data['summary']              = '陈晓升返现金额20496.56';                                    //摘要
        // $data['payee_identity_id']      = '20151008160';                                        //用户ID
        // $data['payee_identity_type'] = 'UID';                                                    //用户类型
        // $data['account_type']          = "SAVING_POT";                                            //账户类型
        // ksort($data);
        // $data['sign']                  = $weibopay->getSignMsg($data, $data['sign_type']);        //计算签名
        // $setdata                      = $weibopay->createcurl_data($data);
        // $result                      = $weibopay->curlPost($payConfig['sinapay']['mas'], $setdata);//模拟表单提交
        // $rs = checksinaerror($result);
        // print_r($rs);
	// }

	// public function fancai(){
		// import("@.Oauth.sina.Weibopay");
        // $payConfig = FS("Webconfig/payconfig");
        // $weibopay = new Weibopay();
        // $data['service']              = "create_single_hosting_pay_trade";                        //接口名称
        // $data['version']              = $payConfig['sinapay']['version'];                        //接口版本
        // $data['request_time']          = date('YmdHis');                                            //请求时间
        // $data['user_ip']              = get_client_ip();                                                //用户IP地址
        // $data['partner_id']          = $payConfig['sinapay']['partner_id'];                    //合作者身份ID
        // $data['_input_charset']      = $payConfig['sinapay']['_input_charset'];                //网站编码格式
        // $data['sign_type']          = $payConfig['sinapay']['sign_type'];                        //签名方式 MD5
        // $data['out_trade_no']        = date('YmdHis').mt_rand(100000, 999999);                // 交易订单号
        // $data['out_trade_code']      = '2001';                                                    //交易码
        // $data['amount']              = '13133.25';                                                    //金额
        // $data['summary']              = '蔡晓佳返现金额13133.25';                                    //摘要
        // $data['payee_identity_id']      = '201510083380';                                        //用户ID
        // $data['payee_identity_type'] = 'UID';                                                    //用户类型
        // $data['account_type']          = "SAVING_POT";                                            //账户类型
        // ksort($data);
        // $data['sign']                  = $weibopay->getSignMsg($data, $data['sign_type']);        //计算签名
        // $setdata                      = $weibopay->createcurl_data($data);
        // $result                      = $weibopay->curlPost($payConfig['sinapay']['mas'], $setdata);//模拟表单提交
        // $rs = checksinaerror($result);
        // print_r($rs);
	// }
	
	// public function huankuan(){
		// $list = M("investor_detail")->where("borrow_id = 3020 and sort_order = 1")->select();
		// // print_r($list);die;
		// $total = 0;
		// $i = 0;
		// $k = 0;
		// $j = 0;
		// $trade_list = ""; //新浪的交易列表
		// foreach ($list as $value){
			// if ($i < 200) {
                // if ($k === 0) {
                     // $trade_list[$j] = date('YmdHis').mt_rand(100000, 999999).'~20151008'.$value['investor_uid'].'~UID~SAVING_POT~'.($value['capital']+$value['interest']).'~~第ZJB18号标投资收益还款';
                    // $k++;
                // } else {
                     // $trade_list[$j] .= '$'.date('YmdHis').mt_rand(100000, 999999).'~20151008'.$value['investor_uid'].'~UID~SAVING_POT~'.($value['capital']+$value['interest']).'~~第ZJB18号标投资收益还款';

                // }
                // $i++;
                // if ($i === 200) {
                    // $i = 0;
                    // $k = 0;
                    // $j++;
                // }
            // }
			// $total += ($value['capital']+$value['interest']);
		// }
		// // print_r($total);die;
		// foreach ($trade_list as $l) {
			// sinabatchpay($l, 3020);
		// }
	// }
	
	// public function huanjiaxi(){
		// $list = M("investor_detail")->where("borrow_id = 2758 and sort_order = 1 and jiaxi_money > 0")->select();
		// // print_r($list);die;
		// $total = 0;
		// $i = 0;
		// $k = 0;
		// $j = 0;
		// $trade_list = ""; //新浪的交易列表
		// foreach ($list as $value){
			// if ($i < 200) {
                // if ($k === 0) {
                     // $trade_list[$j] = date('YmdHis').mt_rand(100000, 999999).'~20151008'.$value['investor_uid'].'~UID~SAVING_POT~'.($value['jiaxi_money']).'~~第XJ102号标加息金额';
                    // $k++;
                // } else {
                     // $trade_list[$j] .= '$'.date('YmdHis').mt_rand(100000, 999999).'~20151008'.$value['investor_uid'].'~UID~SAVING_POT~'.($value['jiaxi_money']).'~~第XJ102号标加息金额';

                // }
                // $i++;
                // if ($i === 200) {
                    // $i = 0;
                    // $k = 0;
                    // $j++;
                // }
            // }
			// $total += ($value['jiaxi_money']);
		// }
		// // print_r($trade_list);die;
		// // print_r($total);die;
		// foreach ($trade_list as $l) {
			// sinabatchpay($l, 2758);
		// }
	// }
	
	// public function tuikuan(){
		// import("@.Oauth.sina.Weibopay");
        // $payConfig = FS("Webconfig/payconfig");
        // $weibopay = new Weibopay();
        // $data['service']              = "create_hosting_collect_trade";                            //接口名称
        // $data['version']              = $payConfig['sinapay']['version'];                        //接口版本
        // $data['request_time']          = date('YmdHis');                                            //请求时间
        // $data['partner_id']          = $payConfig['sinapay']['partner_id'];                    //合作者身份ID
        // $data['_input_charset']      = $payConfig['sinapay']['_input_charset'];                //网站编码格式
        // $data['sign_type']              = $payConfig['sinapay']['sign_type'];                        //签名方式 MD5
        // $data['out_trade_no']         = date('YmdHis').mt_rand(100000, 999999);                // 交易订单号
        // $data['out_trade_code']          = '1002';                                                    //交易码
        // $data['summary']              = '退款操作';                                            //摘要
        // $data['payer_id']              = '2015100836059';                                //用户ID
        // $data['payer_identity_type']  = 'UID';                                                    //ID类型
        // $data['payer_ip']=get_client_ip();
        // $data['pay_method']              = "online_bank^1014.25^SINAPAY,DEBIT,C";            //支付方式：支付方式^金额^扩展|支付方式^金额^扩展。扩展信息内容以“，”分隔
        // $data['extend_param']          = "channel_black_list^online_bank";
        // ksort($data);
        // $data['sign']                  = $weibopay->getSignMsg($data, $data['sign_type']);        //计算签名
        // $setdata                      = $weibopay->createcurl_data($data);
        // $result                          = $weibopay->curlPost($payConfig['sinapay']['mas'], $setdata);//模拟表单提交
        // echo $result;
	// }
	
	
	// public function cehui(){
		// // echo 11111;die;
		// //date('YmdHis').mt_rand(100000, 999999)."~20170908214734536382~第ZJB44号标投资失败" 71746 295  5
		// //date('YmdHis').mt_rand(100000, 999999)."~20170908214818100222~第ZJB44号标投资失败" 71746 97    3
		// //date('YmdHis').mt_rand(100000, 999999)."~20170909070245964011~第ZJB44号标投资失败" 71297 1980  
		// //date('YmdHis').mt_rand(100000, 999999)."~20170909125819846711~第ZJB44号标投资失败" 71718 990
		// //date('YmdHis').mt_rand(100000, 999999)."~20170910152411780193~第ZJB44号标投资失败" 102   10000
		// //date('YmdHis').mt_rand(100000, 999999)."~20170911103424126135~第ZJB44号标投资失败" 3189  300
		// //date('YmdHis').mt_rand(100000, 999999)."~20170911103610484403~第ZJB44号标投资失败" 14961 36800
		// //date('YmdHis').mt_rand(100000, 999999)."~20170911131028303982~第ZJB44号标投资失败" 35049 2200
		// //date('YmdHis').mt_rand(100000, 999999)."~20170911135230765992~第ZJB44号标投资失败" 34838 4600
		// //date('YmdHis').mt_rand(100000, 999999)."~20170911205008684333~第ZJB44号标投资失败" 1849  400
		// //date('YmdHis').mt_rand(100000, 999999)."~20170911220111248393~第ZJB44号标投资失败" 71760 1980
		// //date('YmdHis').mt_rand(100000, 999999)."~20170912111051817513~第ZJB44号标投资失败" 71766 9900
		// //date('YmdHis').mt_rand(100000, 999999)."~20170912183000772850~第ZJB44号标投资失败" 268   500
		
		// import("@.Oauth.sina.Weibopay");
        // $payConfig = FS("Webconfig/payconfig");
        // $weibopay = new Weibopay();
        // $data['service']              = "cancel_pre_auth_trade";                                //接口名称
        // $data['version']              = $payConfig['sinapay']['version'];                        //接口版本
        // $data['request_time']          = date('YmdHis');                                            //请求时间
        // $data['partner_id']          = $payConfig['sinapay']['partner_id'];                    //合作者身份ID
        // $data['_input_charset']      = $payConfig['sinapay']['_input_charset'];                //网站编码格式
        // $data['sign_type']              = $payConfig['sinapay']['sign_type'];                        //签名方式 MD5
        // $data['out_request_no']       = date('YmdHis').mt_rand(100000, 999999);                //交易订单号
        // $data['trade_list']              = date('YmdHis').mt_rand(100000, 999999)."~20170912183000772850~第ZJB44号标投资失败";
        // ksort($data);
        // $data['sign']                  = $weibopay->getSignMsg($data, $data['sign_type']);        //计算签名
        // $setdata                      = $weibopay->createcurl_data($data);
        // $result                          = $weibopay->curlPost($payConfig['sinapay']['mas'], $setdata);//模拟表单提交
        // sinalog(268, 3050, 5, '20170912183000772850', 500, time(), null);
		// $rs = checksinaerror($result);
		// print_r($rs);
	// }
	
	
	// public function oldfan(){
		// import("@.Oauth.sina.Weibopay");
        // $payConfig = FS("Webconfig/payconfig");
        // $weibopay = new Weibopay();
        // $data['service']              = "create_hosting_collect_trade";                            //接口名称
        // $data['version']              = $payConfig['sinapay']['version'];                        //接口版本
        // $data['request_time']         = date('YmdHis');                                            //请求时间
        // $data['partner_id']           = $payConfig['sinapay']['partner_id'];                    //合作者身份ID
        // $data['_input_charset']       = $payConfig['sinapay']['_input_charset'];                //网站编码格式
        // $data['sign_type']            = $payConfig['sinapay']['sign_type'];                        //签名方式 MD5
        // $data['out_trade_no']         = date('YmdHis').mt_rand(100000, 999999);                // 交易订单号
        // $data['out_trade_code']       = '1002';                                                    //交易码
        // $data['summary']              = "大闯关返现金额共20390元";                //摘要
        // $data['payer_id']             = $payConfig['sinapay']['email'];                            //付款人邮箱
        // $data['payer_identity_type']  = 'EMAIL';                                                //ID类型
        // $data['payer_ip']=get_client_ip();
        // $data['pay_method']              = "balance^20390.00^BASIC";                                //支付方式：支付方式^金额^扩展|支付方式^金额^扩展。扩展信息内容以“，”分隔
        // ksort($data);
        // $data['sign']                  = $weibopay->getSignMsg($data, $data['sign_type']);        //计算签名
        // $setdata                      = $weibopay->createcurl_data($data);
        // $result                          = $weibopay->curlPost($payConfig['sinapay']['mas'], $setdata);//模拟表单提交
        // $rs = checksinaerror($result);
        // print_r($rs);
	// }
	
	// public function fanold(){
		// $list = array(
				// array('uid'=>'138','money'=>'38'),
				// array('uid'=>'181','money'=>'38'),
				// array('uid'=>'296','money'=>'3588'),
				// array('uid'=>'315','money'=>'308'),
				// array('uid'=>'1851','money'=>'618'),
				// array('uid'=>'2790','money'=>'68'),
				// array('uid'=>'3032','money'=>'38'),
				// array('uid'=>'3042','money'=>'68'),
				// array('uid'=>'3122','money'=>'168'),
				// array('uid'=>'3179','money'=>'38'),
				// array('uid'=>'3384','money'=>'68'),
				// array('uid'=>'4399','money'=>'68'),
				// array('uid'=>'4404','money'=>'308'),
				// array('uid'=>'4553','money'=>'38'),
				// array('uid'=>'4652','money'=>'38'),
				// array('uid'=>'4674','money'=>'618'),
				// array('uid'=>'6747','money'=>'38'),
				// array('uid'=>'17578','money'=>'68'),
				// array('uid'=>'21330','money'=>'38'),
				// array('uid'=>'34176','money'=>'38'),
				// array('uid'=>'34228','money'=>'38'),
				// array('uid'=>'34293','money'=>'38'),
				// array('uid'=>'34512','money'=>'68'),
				// array('uid'=>'34528','money'=>'68'),
				// array('uid'=>'34530','money'=>'68'),
				// array('uid'=>'34558','money'=>'38'),
				// array('uid'=>'34561','money'=>'68'),
				// array('uid'=>'34599','money'=>'38'),
				// array('uid'=>'34651','money'=>'618'),
				// array('uid'=>'34716','money'=>'168'),
				// array('uid'=>'34743','money'=>'68'),
				// array('uid'=>'34789','money'=>'308'),
				// array('uid'=>'34818','money'=>'68'),
				// array('uid'=>'34938','money'=>'308'),
				// array('uid'=>'35136','money'=>'1288'),
				// array('uid'=>'35164','money'=>'168'),
				// array('uid'=>'35311','money'=>'38'),
				// array('uid'=>'35504','money'=>'68'),
				// array('uid'=>'35550','money'=>'38'),
				// array('uid'=>'35875','money'=>'168'),
				// array('uid'=>'36059','money'=>'68'),
				// array('uid'=>'43004','money'=>'308'),
				// array('uid'=>'43393','money'=>'68'),
				// array('uid'=>'43401','money'=>'38'),
				// array('uid'=>'43624','money'=>'168'),
				// array('uid'=>'44131','money'=>'168'),
				// array('uid'=>'70670','money'=>'68'),
				// array('uid'=>'70692','money'=>'38'),
				// array('uid'=>'71052','money'=>'168'),
				// array('uid'=>'71295','money'=>'168'),
				// array('uid'=>'71350','money'=>'68'),
				// array('uid'=>'71375','money'=>'68'),
				// array('uid'=>'71382','money'=>'68'),
				// array('uid'=>'71385','money'=>'68'),
				// array('uid'=>'71519','money'=>'68'),
				// array('uid'=>'71569','money'=>'308'),
				// array('uid'=>'71592','money'=>'68'),
				// array('uid'=>'71775','money'=>'68'),
				// array('uid'=>'71783','money'=>'38'),
				// array('uid'=>'71828','money'=>'68'),
				// array('uid'=>'71901','money'=>'38'),
				// array('uid'=>'71914','money'=>'38'),
				// array('uid'=>'71932','money'=>'38'),
				// array('uid'=>'71936','money'=>'68'),
				// array('uid'=>'71992','money'=>'38'),
				// array('uid'=>'72000','money'=>'68'),
				// array('uid'=>'72028','money'=>'38'),
				// array('uid'=>'72043','money'=>'38'),
				// array('uid'=>'72071','money'=>'38'),
				// array('uid'=>'72092','money'=>'38'),
				// array('uid'=>'72152','money'=>'68'),
				// array('uid'=>'72168','money'=>'68'),
				// array('uid'=>'72188','money'=>'68'),
				// array('uid'=>'72192','money'=>'68'),
				// array('uid'=>'72207','money'=>'38'),
				// array('uid'=>'72210','money'=>'38'),
				// array('uid'=>'72225','money'=>'38'),
				// array('uid'=>'72238','money'=>'68'),
				// array('uid'=>'72262','money'=>'308'),
				// array('uid'=>'72286','money'=>'68'),
				// array('uid'=>'72291','money'=>'38'),
				// array('uid'=>'72292','money'=>'38'),
				// array('uid'=>'72317','money'=>'68'),
				// array('uid'=>'72347','money'=>'308'),
				// array('uid'=>'72352','money'=>'38'),
				// array('uid'=>'72387','money'=>'308'),
				// array('uid'=>'72414','money'=>'38'),
				// array('uid'=>'72442','money'=>'68'),
				// array('uid'=>'72488','money'=>'308'),
				// array('uid'=>'72490','money'=>'1288'),
				// array('uid'=>'72494','money'=>'308'),
				// array('uid'=>'72495','money'=>'68'),
				// array('uid'=>'72500','money'=>'68'),
				// array('uid'=>'72501','money'=>'38'),
				// array('uid'=>'72505','money'=>'68'),
				// array('uid'=>'72507','money'=>'308'),
				// array('uid'=>'72509','money'=>'308'),
				// array('uid'=>'72511','money'=>'38'),
				// array('uid'=>'72512','money'=>'308'),
				// array('uid'=>'72522','money'=>'308'),
				// array('uid'=>'72528','money'=>'68'),
				// array('uid'=>'72529','money'=>'68'),
				// array('uid'=>'72539','money'=>'68'),
				// array('uid'=>'72542','money'=>'68'),
				// array('uid'=>'72543','money'=>'308'),
				// array('uid'=>'72545','money'=>'68'),
				// array('uid'=>'72550','money'=>'38'),
				// array('uid'=>'72553','money'=>'168'),
				// array('uid'=>'72560','money'=>'68'),
				// array('uid'=>'72565','money'=>'68'),
				// array('uid'=>'72569','money'=>'38'),
				// array('uid'=>'72580','money'=>'68'),
				// array('uid'=>'72582','money'=>'68'),
				// array('uid'=>'72596','money'=>'38'),
				// array('uid'=>'72599','money'=>'68'),
				// array('uid'=>'72600','money'=>'68'),
				// array('uid'=>'72602','money'=>'68'),
				// array('uid'=>'72604','money'=>'68'),
				// array('uid'=>'72608','money'=>'38'),
				// array('uid'=>'72610','money'=>'68'),
				// array('uid'=>'72617','money'=>'68'),
				// array('uid'=>'72618','money'=>'38'),
				// array('uid'=>'72620','money'=>'38'),
				// array('uid'=>'72621','money'=>'68'),
				// array('uid'=>'72630','money'=>'38'),
				// array('uid'=>'72645','money'=>'38'),
				// array('uid'=>'72646','money'=>'68'),
				// array('uid'=>'72663','money'=>'38'),
				// array('uid'=>'72670','money'=>'68'),
				// array('uid'=>'72673','money'=>'38'),
				// array('uid'=>'72677','money'=>'68'),
				// array('uid'=>'72678','money'=>'308'),
				// array('uid'=>'72679','money'=>'68'),
				// array('uid'=>'72691','money'=>'68'),
				// array('uid'=>'72693','money'=>'38'),
			// );
		
		// $total = 0;
		// $i = 0;
		// $k = 0;
		// $j = 0;
		// $trade_list = ""; //新浪的交易列表
		// foreach ($list as $value){
			// if ($i < 200) {
                // if ($k === 0) {
                     // $trade_list[$j] = date('YmdHis').mt_rand(100000, 999999).'~20151008'.$value['uid'].'~UID~SAVING_POT~'.$value['money'].'~~大闯关返现';
                    // $k++;
                // } else {
                     // $trade_list[$j] .= '$'.date('YmdHis').mt_rand(100000, 999999).'~20151008'.$value['uid'].'~UID~SAVING_POT~'.$value['money'].'~~大闯关返现';

                // }
                // $i++;
                // if ($i === 200) {
                    // $i = 0;
                    // $k = 0;
                    // $j++;
                // }
            // }
			// $total += $value['money'];
		// }
		// // print_r($trade_list);die;
		 // // echo $total;die;
		
		// import("@.Oauth.sina.Weibopay");
        // $payConfig = FS("Webconfig/payconfig");
        // $weibopay = new Weibopay();
        // $data['service']              = "create_batch_hosting_pay_trade";                        //接口名称
        // $data['version']              = $payConfig['sinapay']['version'];                        //接口版本
        // $data['request_time']          = date('YmdHis');                                            //请求时间
        // $data['user_ip']              = get_client_ip();                                                //用户IP地址
        // $data['partner_id']          = $payConfig['sinapay']['partner_id'];                    //合作者身份ID
        // $data['_input_charset']      = $payConfig['sinapay']['_input_charset'];                //网站编码格式
        // $data['sign_type']              = $payConfig['sinapay']['sign_type'];                        //签名方式 MD5
        // $data['out_pay_no']           = date('YmdHis').mt_rand(100000, 999999);                //交易订单号
        // $data['out_trade_code']          = '2002';                                                    //交易码 2001代付借款金 2002代付（本金/收益）金
        // $data['trade_list']              = $trade_list[0];                                            //交易列表
        // $data['notify_method']          = 'batch_notify';                                            //通知方式：single_notify: 交易逐笔通知 batch_notify: 批量通知
        // ksort($data);
        // $data['sign']                  = $weibopay->getSignMsg($data, $data['sign_type']);        //计算签名
        // $setdata                      = $weibopay->createcurl_data($data);
        // $result                          = $weibopay->curlPost($payConfig['sinapay']['mas'], $setdata);//模拟表单提交
        // $rs = checksinaerror($result);
		// print_r($rs);
	// }
	
	// public function spt4fan(){
		// import("@.Oauth.sina.Weibopay");
        // $payConfig = FS("Webconfig/payconfig");
        // $weibopay = new Weibopay();
        // $data['service']              = "create_hosting_collect_trade";                            //接口名称
        // $data['version']              = $payConfig['sinapay']['version'];                        //接口版本
        // $data['request_time']         = date('YmdHis');                                            //请求时间
        // $data['partner_id']           = $payConfig['sinapay']['partner_id'];                    //合作者身份ID
        // $data['_input_charset']       = $payConfig['sinapay']['_input_charset'];                //网站编码格式
        // $data['sign_type']            = $payConfig['sinapay']['sign_type'];                        //签名方式 MD5
        // $data['out_trade_no']         = date('YmdHis').mt_rand(100000, 999999);                // 交易订单号
        // $data['out_trade_code']       = '1002';                                                    //交易码
        // $data['summary']              = "新手尾标活动金额共114元";                //摘要
        // $data['payer_id']             = $payConfig['sinapay']['email'];                            //付款人邮箱
        // $data['payer_identity_type']  = 'EMAIL';                                                //ID类型
        // $data['payer_ip']=get_client_ip();
        // $data['pay_method']              = "balance^114.00^BASIC";                                //支付方式：支付方式^金额^扩展|支付方式^金额^扩展。扩展信息内容以“，”分隔
        // ksort($data);
        // $data['sign']                  = $weibopay->getSignMsg($data, $data['sign_type']);        //计算签名
        // $setdata                      = $weibopay->createcurl_data($data);
        // $result                          = $weibopay->curlPost($payConfig['sinapay']['mas'], $setdata);//模拟表单提交
        // $rs = checksinaerror($result);
        // print_r($rs);
	// }
	
	// public function fan4xian(){
		// $list = array(
				// array("uid"=>'72996',"money"=>'38.00'),
				// array("uid"=>'73463',"money"=>'38.00'),
				// array("uid"=>'70792',"money"=>'38.00'),
			// );
		
		// $total = 0;
		// $i = 0;
		// $k = 0;
		// $j = 0;
		// $trade_list = ""; //新浪的交易列表
		// foreach ($list as $value){
			// if ($i < 200) {
                // if ($k === 0) {
                     // $trade_list[$j] = date('YmdHis').mt_rand(100000, 999999).'~20151008'.$value['uid'].'~UID~SAVING_POT~'.$value['money'].'~~新手尾标活动';
                    // $k++;
                // } else {
                     // $trade_list[$j] .= '$'.date('YmdHis').mt_rand(100000, 999999).'~20151008'.$value['uid'].'~UID~SAVING_POT~'.$value['money'].'~~新手尾标活动';

                // }
                // $i++;
                // if ($i === 200) {
                    // $i = 0;
                    // $k = 0;
                    // $j++;
                // }
            // }
			// $total += $value['money'];
		// }
		 // // echo $total;die;
		
		// import("@.Oauth.sina.Weibopay");
        // $payConfig = FS("Webconfig/payconfig");
        // $weibopay = new Weibopay();
        // $data['service']              = "create_batch_hosting_pay_trade";                        //接口名称
        // $data['version']              = $payConfig['sinapay']['version'];                        //接口版本
        // $data['request_time']          = date('YmdHis');                                            //请求时间
        // $data['user_ip']              = get_client_ip();                                                //用户IP地址
        // $data['partner_id']          = $payConfig['sinapay']['partner_id'];                    //合作者身份ID
        // $data['_input_charset']      = $payConfig['sinapay']['_input_charset'];                //网站编码格式
        // $data['sign_type']              = $payConfig['sinapay']['sign_type'];                        //签名方式 MD5
        // $data['out_pay_no']           = date('YmdHis').mt_rand(100000, 999999);                //交易订单号
        // $data['out_trade_code']          = '2002';                                                    //交易码 2001代付借款金 2002代付（本金/收益）金
        // $data['trade_list']              = $trade_list[0];                                            //交易列表
        // $data['notify_method']          = 'batch_notify';                                            //通知方式：single_notify: 交易逐笔通知 batch_notify: 批量通知
        // ksort($data);
        // $data['sign']                  = $weibopay->getSignMsg($data, $data['sign_type']);        //计算签名
        // $setdata                      = $weibopay->createcurl_data($data);
        // $result                          = $weibopay->curlPost($payConfig['sinapay']['mas'], $setdata);//模拟表单提交
        // $rs = checksinaerror($result);
		// print_r($rs);
	// }
	
	
	// public function sendtoc(){
		// // echo 1111;die;
		// import("@.Oauth.sina.Weibopay");
        // $payConfig = FS("Webconfig/payconfig");
        // $weibopay = new Weibopay();
        // $data['service']              = "create_single_hosting_pay_trade";                        //接口名称
        // $data['version']              = $payConfig['sinapay']['version'];                        //接口版本
        // $data['request_time']          = date('YmdHis');                                            //请求时间
        // $data['user_ip']              = get_client_ip();                                                //用户IP地址
        // $data['partner_id']          = $payConfig['sinapay']['partner_id'];                    //合作者身份ID
        // $data['_input_charset']      = $payConfig['sinapay']['_input_charset'];                //网站编码格式
        // $data['sign_type']              = $payConfig['sinapay']['sign_type'];                        //签名方式 MD5
        // $data['out_trade_no']         = date('YmdHis').mt_rand(100000, 999999);                // 交易订单号
        // $data['out_trade_code']          = '2001';                                                    //交易码
        // $data['amount']                  = "33629.81";                                                    //金额
        // $data['summary']              = '撤销操作问题返现33629.81元';                                        //摘要
        // $data['payee_identity_id']      = $payConfig['sinapay']['email'];                            //收款人邮箱
        // $data['payee_identity_type']  = 'EMAIL';									//ID类型
        // ksort($data);
        // $data['sign']                  = $weibopay->getSignMsg($data, $data['sign_type']);        //计算签名
        // $setdata                      = $weibopay->createcurl_data($data);
        // $result                          = $weibopay->curlPost($payConfig['sinapay']['mas'], $setdata);//模拟表单提交
		// echo $result;
        // // $rs = checksinaerror($result);
        // // print_r($rs);
	// }
	
	// public function testsum(){
		// $money = $this->sum(3013,1);
		// $saving = floatval(querybalance(71338));
		// var_dump($money);
		// var_dump($saving);
		// var_dump($saving<$money);
	// }
	// public function sum($borrow_id,$sort_order){
		// $pre = C('DB_PREFIX');
		// $done = false;
		// $money = 0;
		// $borrowDetail = D('investor_detail');
		// $binfo = M("borrow_info")->field("id,borrow_uid,n_interest,n_colligate_fee,colligate_fee,product_type,add_time,second_verify_time,borrow_interest_rate,borrow_type,borrow_money,borrow_duration,repayment_type,has_pay,total,deadline")->find($borrow_id);
		// $b_member=M('members')->field("user_name")->find($binfo['borrow_uid']);

		// if( $binfo['has_pay']>=$sort_order) return "本期已还过，不用再还";
		// if( $binfo['has_pay'] == $binfo['total'])  return "此标已经还完，不用再还";
		// if( ($binfo['has_pay']+1)<$sort_order) return "对不起，此借款第".($binfo['has_pay']+1)."期还未还，请先还第".($binfo['has_pay']+1)."期";
		// if( $binfo['deadline']>time() && $type==2)  return "此标还没逾期，不用代还";

		// $voxe = $borrowDetail->field('sort_order,sum(capital) as capital, sum(interest) as interest,sum(interest_fee) as interest_fee,deadline,substitute_time')->where("borrow_id={$borrow_id} and status!=-1 and is_debt = 0 ")->group('sort_order')->select();
		// foreach($voxe as $ee=>$ss){
			// if($ss['sort_order']==$sort_order) $vo = $ss;
		// }

		// // 复审通过后开始计算借款人利息 获取复审时间
		// //$atime = M('borrow_investor')->field("add_time")->where("borrow_id={$borrow_id} and borrow_uid={$binfo['borrow_uid']}")->find();
		// $atime = $binfo['second_verify_time'];
		// //企业直投与普通标,判断还款期数不一样
		// //借款天数、还款时间
		// //利息计算公式 借款总金额*(借款利率/36000)*借款天数
		// $borrow_money           = intval($binfo['borrow_money']); //借款总额
		// $borrow_interest_rate   = $binfo['borrow_interest_rate']; //借款利率 此处因为利率转成了整数 20% 转成 2
		// $day_rate               =  $borrow_interest_rate/36000;//计算出天标的天利率


		// $colligate_fee =0;//综合服务费
		// // 提前还款 当前还时间小于最后还款时间23:59:59
        // import("@.conf.borrow_expired");
        // $expired=new borrow_expired($borrow_id,$sort_order);
        // $expired__money=$expired->get_expired__money();
		// if($binfo['repayment_type'] == 1){
			// // 更新利息 M('investor_detail')
			// $investor_uid = M('investor_detail')->where('borrow_id='.$borrow_id." and status!=-1 and is_debt = 0")->select();


			// $vo['interest'] = 0;
			// $Detail = M("investor_detail");
			// // 提单质押标
			// if($binfo['product_type'] == 1 || $binfo['product_type'] == 3||$binfo['product_type'] == 6||$binfo['product_type'] == 7||$binfo['product_type'] == 8||$binfo['product_type'] == 10){

                // //计算还款天数，如果不足70%天，需要按70%算利息
                // /***********************************************/
                // /*
				// $duration=$binfo['borrow_duration'];
                // $limit_borrow_day=ceil($duration*0.7);
                // if($BorrowingDays<$limit_borrow_day)
                    // $BorrowingDays=$limit_borrow_day;*/
                // $currentTime            = strtotime(date('Y-m-d')); //当前需还款时间
                // $issueTime              = strtotime(date('Y-m-d',$atime));//复审后的时间

                // $binfo['deadline']=cal_deadline($borrow_id);//修正bug.

                // if(strtotime(date('Y-m-d',$binfo['deadline'])) == $currentTime && $borrow_id <= 325){
                    // $BorrowingDays = ceil(($currentTime - $issueTime)/3600/24);//计算借款天数 不足一天按一天算
                // }else if(strtotime(date('Y-m-d',$binfo['deadline']))>$currentTime){
                    // $BorrowingDays = ceil(($currentTime - $issueTime)/3600/24+1);//计算借款天数 不足一天按一天算
                // }else{
                    // $BorrowingDays = ceil(($binfo['deadline'] - $issueTime)/3600/24);//逾期的时候，按照deadline算，后续会计算逾期利息
                // }

                // if($BorrowingDays == 0){
                    // $BorrowingDays = $BorrowingDays +1;
                // }




				// // 综合服务费 利率/36000 * 借款金额 * 天数  提单、现货的综合服务费
				// $colligate_fee = getFloatValue($binfo['colligate_fee']/36000*$binfo['borrow_money']*$BorrowingDays, 2);
				// foreach ($investor_uid as $iteme) {
					// $tou_interest = getFloatValue($iteme['capital']*$day_rate*$BorrowingDays, 2);
					// $vo['interest'] += $tou_interest;
					// unset($iteme['id']);
					// //$Detail->execute("update `{$pre}investor_detail` set `interest`={$tou_interest} WHERE `capital`={$iteme['capital']} and `borrow_id`={$borrow_id}");
				// }
			// }
			// // 转现货质押标
			// if ($binfo['product_type'] == 2) {

				// // 投资人额度/标的总额*旧利息
				// $vo['interest'] = 0;
				// $xhtime = M('borrow_info')->field("add_time")->where("id={$borrow_id} and borrow_uid={$binfo['borrow_uid']}")->find();
				// $currentTime            = strtotime(date('Y-m-d')); //当前时间
				// $issueTime              = strtotime(date('Y-m-d',$xhtime['add_time']));//转现货时间
                // $binfo['deadline']=cal_deadline($borrow_id);//修正bug.
				// if(strtotime(date('Y-m-d',$binfo['deadline'])) == $currentTime && $borrow_id <= 325){
					// $BorrowingDays = ceil(($currentTime - $issueTime)/3600/24);//计算借款天数 不足一天按一天算
				// }else  if(strtotime(date('Y-m-d',$binfo['deadline']))>$currentTime){
					// $BorrowingDays = ceil(($currentTime - $issueTime)/3600/24+1);//计算借款天数 不足一天按一天算
				// }else{
                    // $BorrowingDays = ceil(($binfo['deadline'] - $issueTime)/3600/24);//逾期的时候，按照deadline算，后续会计算逾期利息
                // }
				// if($BorrowingDays == 0){
					// $BorrowingDays = $BorrowingDays +1;
				// }
                // //计算还款天数，如果不足70%天，需要按70%算利息
                // /***********************************************/
				// /*
                // $duration=$binfo['borrow_duration'];
                // $limit_borrow_day=ceil($duration*0.7);
                // if($BorrowingDays<$limit_borrow_day)
                    // $BorrowingDays=$limit_borrow_day;*/


				// $totalinterest = 0;
				// // 综合服务费 利率/36000 * 借款金额 * 天数  提单转现货的综合服务费
				// $colligate_fee = getFloatValue($binfo['colligate_fee']/36000*$binfo['borrow_money']*$BorrowingDays, 2);
				// foreach ($investor_uid as $iteme) {
					// $tou_interest = getFloatValue($iteme['capital']*$day_rate*$BorrowingDays, 2);
					// $vo['interest'] += $tou_interest;
				// }
				// foreach ($investor_uid as $n) {
					// $d_interest = getFloatValue($n['capital']/$binfo['borrow_money']*($vo['interest']+$binfo['n_interest']),2);
					// $totalinterest += $d_interest;
					// unset($iteme['id']);
					// // print_r($binfo['n_interest']."<br>");
					// //$Detail->execute("update `{$pre}investor_detail` set `interest`={$d_interest} WHERE `capital`={$n['capital']} and `borrow_id`={$borrow_id}");
				// }
				// $vo['interest'] = $totalinterest;
				// $colligate_fee +=$binfo['n_colligate_fee'];
			// }
		// }else{
			// $field = "sum(capital) as capital,sum(interest) as interest";
			// $vo = M("investor_detail")->field($field)->where("borrow_id={$borrow_id} AND `sort_order`={$sort_order} and status!=-1 and is_debt = 0")->find();
			// $money = $vo['capital']+$vo['interest'];
		// }
            // $pay_frist=D("borrow_info_additional")->is_pay_frist($borrow_id);//判断此标是否提前收取了综合服务费。 1表示已经收取。
            // if($pay_frist)
                // $money = $vo['capital']+$vo['interest']; //已经收取了综合服务费，这里不在计算
            // else
                // $money = $vo['capital']+$vo['interest']+$colligate_fee;
        // $money+=$expired__money;//罚息
		// return $money;
	// }
	
}