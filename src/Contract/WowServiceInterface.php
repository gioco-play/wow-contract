<?php
declare(strict_types=1);
namespace GiocoPlus\WOW\Contract;
/**
 * 交易
 */
interface WowServiceInterface {

    /**
     * 遊戲啟動
     *
     * @param string $op_code
     * @param string $account
     * @param string $game_code
     * @param string $language
     * @param string $back_url
     * @return mixed
     */
    function gameLaunch(string $op_code, string $account, string $game_code, string $language, string $back_url = null);
    
    /**
     * 遊戲詳情
     * @param string $op_code
     * @param string $account
     * @param string $bet_id
     * @return mixed
     */
    function gameDetail(string $op_code, string $account, string $bet_id);

    /**
     * 抓取遊戲紀錄
     *
     * @param string $opCode
     * @param int $pastMinutes
     * @param string $cacheKey
     * @return mixed
     */
    function betLogGrabber(string $opCode, int $pastMinutes, string $cacheKey);

    /**
     * 全營商 抓取遊戲紀錄
     *
     * @param int $past_minutes
     * @return mixed
     */
    function betLogGrabberAll(int $past_minutes);

    /**
     * 遊戲上分
     *
     * @param string $op_code
     * @param string $account
     * @return mixed
     */
    function gameTransferIn(string $op_code, string $account);

    /**
     * 遊戲下分
     *
     * @param string $op_code
     * @param string $account
     * @param float $amount
     * @return mixed
     */
    function gameTransferOut(string $op_code, string $account, float $amount);

    /**
     * 取得錢包餘額
     *
     * @param string $op_code
     * @param string $account
     * @return mixed
     */
    function getBalance(string $op_code, string $account);

    /**
     * 上/下分失敗 訂單檢核
     *
     * @param string $op_code
     * @param string $order_no
     * @return mixed
     */
    function orderFailCheck(string $op_code, string $order_no);
}

