<?php
class PenggunaModel extends CI_Model {

	// Create
	public function createPengguna($pengguna){		// object
		$query="INSERT INTO pengguna (nama,nim,username,password) VALUES ('".$pengguna['nama']."', '".$pengguna['nim']."', '".$pengguna['username']."', '".$pengguna['password']."')";
		return $this->db->query($query);
	}

	// Read
	public function readPengguna($id_pengguna){
		if($id_pengguna){
			$query="SELECT * FROM pengguna WHERE id_pengguna='".$id_pengguna."'";
			return $this->db->query($query)->row_result();
		}else{
			$query="SELECT * FROM pengguna ORDER BY nama_pengguna ASC";
			return $this->db->query($query)->array_result();
		}
	}

	// Update
	public function updatePengguna($pengguna){		// object
		$query="UPDATE pengguna SET nama='".$pengguna['nama']."', nim='".$pengguna['nim']."', username='".$pengguna['username']."', password='".$pengguna['password']."' WHERE id_pengguna='".$pengguna['id_pengguna']."'";
		return $this->db->query($query);
	}

	// Delete
	public function deletePengguna($id_pengguna){
		$query="DELETE FROM pengguna WHERE id_pengguna='".$id_pengguna."'";
		return $this->db->query($query);
	}
}