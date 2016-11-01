<?php

class IndexAction extends Action {
   
	public function index(){	
		header("Content-Type:text/html; charset=utf-8");
		
		//实例化文章模型
		$news=M('article');	

		$news_list=$news->field(array('id','subject','message','createtime'))->order('id desc')->select();
        $m=M('User');
        $arr=$m->find(17);//id为2的数据
        //select 获取全部数据
        // $arr= $m->where('id=17')->getField('username');  表示连贯操作
        //
        trace($arr,'提示');
        //var_dump( $arr);//输出这个内容
        //对数据进行创建这个部分
        $m=new Model('User');
        $m->username='ruby99';
        $m->add();//对此数据添加成功!

        $m=M('User');
        $data['id']=21;
        $data['username']="郭帅";
        $count=$m->save($data);
        echo $count;//受影响行数,注意删除修改都是;create的返回值是
        /**
         * 如何删除一条数据
         */
        $m->delete('18');
        $m->where('id=19')->delete();


		foreach($news_list as $key=>$value){

            $news_list[$key]['createtime']=date("Y-m-d H:i:s",$value['createtime']);
            $news_list[$key]['lastmodifytime']=date("Y-m-d H:i:s",$value['lastmodifytime']);

        }
		$this->assign('title','我们是冠军');
		$this->assign('news_list',$news_list);
		$this->display();
	}
}