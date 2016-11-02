<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/1
 * Time: 2:21
 */

class UserAction extends Action {

    public function index(){
        //echo "userAction";
        //从数据中读取出来
  /*      $m=M('User');
        $arr=$m->select();
        var_dump($arr);
        //需要绑定内容
        $this->assign('data',$arr);*/
        import('ORG.Util.Page'); //Page类的引入

        $db = M("User");
        $where = "createtime='0'";
        $count = $db->where($where)->count();
        $pagecount = 20;
        $page = new Page($count , $pagecount);
        $page->setConfig('first','first');
        $page->setConfig('prev','prev');
        $page->setConfig('next','next');
        $page->setConfig('last','last');
        //$page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 1 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
        $show = $page->show();
        $list = $db->where($where)->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
    }

    public function del(){
        $m=M('User');
        $id=$_GET['id'];
        $count=$m->delete($id);//返回值是影响行数
        if($count>0){
            $this->success('数据删除成功');
        }else{
            $this->error('数据删除失败');
        }
    }

    /**
     *显示修改页面
     */
    public function modify(){
        $id=$_GET['id'];
        $m=M('User');
        $arr=$m->find($id);
        $this->assign('data',$arr);
        $this->display();
    }

}
?>
