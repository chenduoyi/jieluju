<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">

    <form method="post" action="/Admin/Node/<?php if(($vo["id"]) != ""): ?>update<?php else: ?>insert<?php endif; ?>/navTabId//Admin?callbackType=closeCurrent"
          class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone)">
        <input type="hidden" name="user_id" value="<?php echo $_SESSION[C('USER_AUTH_KEY')] ?>">
        <input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>">
        <input type="hidden" name="ajax" value="1">
        <?php if(!$vo['id']): ?><input type="hidden" name="pid" value="<?php echo ($pid); ?>">
            <input type="hidden" name="level" value="<?php echo ($level); ?>"><?php endif; ?>

        <div class="pageFormContent" layoutH="58">
            <div class="unit">
                <label>节点路径：</label>
                <input type="text" class="required alphanumeric" name="name" value="<?php echo ($vo["name"]); ?>">
            </div>

            <div class="unit">
                <label>节点名称：</label>
                <input type="text" class="required" name="title" value="<?php echo ($vo["title"]); ?>">
            </div>
            <div class="unit">
                <label>排序：</label>
                <input type="text" class="required" name="sort" value="<?php echo ($vo["sort"]); ?>">
            </div>

            <div class="unit">
                <label>状态：</label>
                <select name="status">
                    <option
                    <?php if(($vo["status"]) == "1"): ?>selected<?php endif; ?>
                    value="1">启用</option>
                    <option
                    <?php if(($vo["status"]) == "0"): ?>selected<?php endif; ?>
                    value="0">禁用</option>
                </select>
            </div>

            <div class="unit">
                <label>描 述：</label>
                <textarea name="remark" rows="3" cols="57"><?php echo ($vo["remark"]); ?></textarea>
            </div>
        </div>

        <div class="formBar">
            <ul>
                <li>
                    <div class="buttonActive">
                        <div class="buttonContent">
                            <button type="submit">保存</button>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="button">
                        <div class="buttonContent">
                            <button type="button" class="close">取消</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </form>

</div>