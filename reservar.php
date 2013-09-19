<?PHP  include('wp-load.php');
extract($_POST);

$post=array(

'post_title'=>'Reserva - '.$nombres,
);


print_r($post);
echo $post_id=$_POST['post_id'];