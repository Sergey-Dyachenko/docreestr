<?php
  
    class Document{
        var $user,$data,$quantity,$doc_num,$note,$customer,$doctype,$reesterId;
        
        function getDoctypes(){
            $result=mysql_query("SELECT doctype, iddoctype FROM doctypes");
            $myrow=mysql_fetch_array($result);
            $doctypes = array();
            while ($myrow=mysql_fetch_assoc($result)){ 
            if ($myrow['iddoctype']==9) $myrow['sel']='selected'; else $myrow['sel']='';  
               $doctypes[]=$myrow;          
             }
           return $doctypes;  
                      
        }
        
         function getCustomers(){
            $result=mysql_query("SELECT customer, idcustomer FROM customers");
            $myrow=mysql_fetch_array($result);
            $customers = array();
            while ($myrow=mysql_fetch_assoc($result)){ 
             
               $customers[]=$myrow;          
             }
           return $customers;  
                      
        }
        
        
        function fill($post) {
                $postMap = array(
                'num_reestr' => 'reesterId',
                'customer' => 'customer',
                'doctype' => 'doctype',
            );
            foreach ($postMap as $postVar => $classVar) {
                if (!isset($post[$postVar])) continue;
                $this->$classVar = $post[$postVar];
                echo $this->$classVar."<br>";
            }           
        }
        function saveReester($num_reestr) {
            $dt=date('Y-m-d');
            $result=mysql_query("INSERT INTO reestrs(idreestr,reestr_date)values('$num_reestr','$dt')");
        }
        
        function save($customer,$num_reestr,$doctype,$data,$userid,$num_doc,$colvo,$description)
        {
            
            /*извлечение id-ов элементов для записи в БД*/
            $idcustomer=mysql_query("SELECT idcustomer from customers where customer='$customer'");
            $idcustomer=mysql_fetch_array($idcustomer);
            $idcustomer=$idcustomer['idcustomer'];
            
            $idreestr=$num_reestr;
            
            $iddoctype=mysql_query("SELECT iddoctype from doctypes where doctype='$doctype'");
            $iddoctype=mysql_fetch_array($iddoctype);
            $iddoctype=$iddoctype['iddoctype'];

                    
                        
            $result=mysql_query("INSERT INTO documents
            (idcustomer,idreestr,iddoctype,iduser,doc_num,data,number,note)
            VALUES
            ('$idcustomer','$idreestr','$iddoctype','$userid','$num_doc','$data','$colvo','$description')");
          //  echo $result;
            
          
                    
        }
        
         function update($customer,$num_reestr,$doctype,$data,$userid,$num_doc,$colvo,$description,$iddoc)
        {
            
            /*извлечение id-ов элементов для записи в БД*/
            $idcustomer=mysql_query("SELECT idcustomer from customers where customer='$customer'");
            $idcustomer=mysql_fetch_array($idcustomer);
            $idcustomer=$idcustomer['idcustomer'];
            
            $idreestr=$num_reestr;
            
            $iddoctype=mysql_query("SELECT iddoctype from doctypes where doctype='$doctype'");
            $iddoctype=mysql_fetch_array($iddoctype);
            $iddoctype=$iddoctype['iddoctype'];

                               
            $result=mysql_query("UPDATE documents
            SET idcustomer='$idcustomer',idreestr='$idreestr',iddoctype='$iddoctype',iduser='$userid',doc_num='$num_doc',data='$data',number='$colvo',note='$description'
            WHERE documents.iddocument='$iddoc'");
          
            
          
                    
        }
        
        function get($sort) {
            $shablon = "SELECT customer,iddocument, doctype, doc_num,DATE_FORMAT(data,'%d.%m.%Y') AS data, number, note
            FROM documents, customers, doctypes, reestrs, users
            WHERE documents.idcustomer = customers.idcustomer
            AND documents.iddoctype = doctypes.iddoctype
            AND documents.idreestr = reestrs.idreestr
            AND documents.iduser = users.iduser ORDER BY ".$sort;
           $result = mysql_query($shablon);
           $documents = array();
           while ($myrow = mysql_fetch_assoc($result)) {
                $documents[] = $myrow;
           }
           return $documents;       
        }     
    }

?>