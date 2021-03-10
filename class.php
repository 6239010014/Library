<?php 
require_once('dbcon.inc.php');
require_once('fn.php');

class showdata
    {
public function show_all_documents()

{
        $db = $this->connect();
        $get_doc = $db->query("SELECT * FROM document ORDER BY did");
        
        while ($document = $get_doc->fetch_assoc()){
            $result[] = $document;
        }
        if (!empty($result)){

            return $result;
        }
    }

public function show_document($doc_id)
{

    $db = $this->connect();
    $show_doc = $db->prepare("SELECT did,dname,dtype,disbn,dauthor,dfile FROM document WHERE did = ?");
    $show_doc-> bind_param('i',$doc_id);
    $show_doc-> execute();
    $show_doc-> bind_result($did, $dname, $dtype, $disbn, $dauthor, $dfile);
    $show_doc-> fetch();
    
    $result = array(
        'did' => $did,
        'dname' => $dname,
        'dtype' => $dtype,
        'disbn' => $disbn,
        'dauthor' => $dauthor,
        'dfile' => $dfile
    );
    return $result;
}
    public function del_doc($doc_id)
    {
        $db = $this->connect();
        $del_doc = $db->bind_param("DELETE FROM document WHERE did = ?");
        $del_doc->bind_param("i",$did);
        if (!$del_doc->execute()) {
            echo $db->error;
        }
                else 
                {
                    echo "Document is already <b>remove</b>";
                }
            }
    }
?>