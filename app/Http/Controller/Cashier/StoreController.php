<?php
/**
 * Notes:
 * User: azhuo
 * Company:APM monaco
 * Auther:Awin zhuo
 * DateTime: 2022/9/2 11:14
 * @return
 */

namespace App\Http\Controller\Cashier;
use Sqcloud\Annotation\Promission;
use Sqcloud\SqcloudResuest;
use Swoft\Http\Message\Request;
use Swoft\Http\Message\Response;
use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\Middleware;
use Swoft\Http\Server\Annotation\Mapping\Middlewares;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;
use Swoft\Http\Server\Annotation\Mapping\RequestMethod;
use Swoft\Http\Session\HttpSession;
use Swoft\Redis\Redis;
use Swoft\Validator\Annotation\Mapping\Validate;
/**
 * Class StoreController
 * @package App\Http\Controller\Cashier
 *
 * @Controller(prefix="/cashierapi/store")
 */
class StoreController extends SqcloudResuest
{

    /**
     * get currenly store cashier staff list
     * @RequestMapping (route="recharge_info",method={RequestMethod::GET})
     * @Promission(authGruop="system:index:index")
     */
    public function rechargeInfo(Request $request)
    {

        return 'ok-recharge_info';
    }

    /**
     * get a recharge packages 获取充值套餐
     * @RequestMapping (route="recharge",method={RequestMethod::POST})
     */
    public function recharge(){

        return 'ok-recharge';
    }
}