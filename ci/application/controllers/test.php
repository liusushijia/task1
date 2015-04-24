<?php


	class Test extends CI_Controller{
		
		public function hh(){


		echo 'hello sushuangpeng';

	}
		    public function get_members(){
			echo '组名';
			echo '     蜗牛';
			echo '<hr />';
			echo '口号';
			echo '     坚持不懈，努力奋斗！';
			echo '<hr />';
		    $this->load->database();
			$sql = 'select * from group_members';
			$res = $this->db->query($sql);
			$result = $res->result();
			$members['members']=$result;
			$this->load->view('showus.php',$members);
		}
	}
?>