<?php 
                        
class Mmodel extends CI_Model 
{
    public function insertar($data)
    {
        
        $a = $this->db->query("select * from usuario where nomusuario = '".$data['nomUsuario']."' and pass = '" .$data['pass']."'");
        
        return $a->result();

    } 
    
    public function insertar2($data){


        $this->db->query("insert into Sede values ("."'".$data['idSede']."','".$data['nomSede']."')");
     }

     public function getdni($data){


        $dni =  $this->db->query("select * from usuario where dni = '".$data['dni']."' and pass = '" .$data['pass']."'");
        return $dni->result();
     }
                        
}
                        
/* End of file Mmodel_model.php */
    
                        