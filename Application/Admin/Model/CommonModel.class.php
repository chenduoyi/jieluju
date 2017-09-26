<?php
namespace Admin\Model;
use Think\Model;
/**
 * 公共模型类
 */
class CommonModel extends Model {

    // 获取当前用户的ID
    public function getMemberId()
    {
        return isset($_SESSION[C('USER_AUTH_KEY')]) ? $_SESSION[C('USER_AUTH_KEY')] : 0;
    }

    /**
     * +----------------------------------------------------------
     * 根据条件禁用表数据
     * +----------------------------------------------------------
     * @access public
     * +----------------------------------------------------------
     * @param array $options 条件
     * +----------------------------------------------------------
     * @return boolen
     * +----------------------------------------------------------
     */
    public function forbid($options, $field = 'status')
    {

        if (false === $this->where($options)->setField($field, 0)) {
            $this->error = L('_OPERATION_WRONG_');
            return false;
        } else {
            return true;
        }
    }


    /**
     * +----------------------------------------------------------
     * 根据条件恢复表数据
     * +----------------------------------------------------------
     * @access public
     * +----------------------------------------------------------
     * @param array $options 条件
     * +----------------------------------------------------------
     * @return boolen
     * +----------------------------------------------------------
     */
    public function resume($options, $field = 'status')
    {
        if (false === $this->where($options)->setField($field, 1)) {
            $this->error = L('_OPERATION_WRONG_');
            return false;
        } else {
            return true;
        }
    }

}
