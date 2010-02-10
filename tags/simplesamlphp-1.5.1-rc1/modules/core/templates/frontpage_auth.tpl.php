<?php 

$this->includeAtTemplateBase('includes/header.php'); 

?>

<?php
if ($this->data['isadmin']) {
	echo '<p style="float: right">' . $this->t('{core:frontpage:loggedin_as_admin}') . '</p>';
} else {
	echo '<p style="float: right"><a href="' . $this->data['loginurl'] . '">' . $this->t('{core:frontpage:login_as_admin}') . '</a></p>';
}
?>


	
<!--	<h2><?php echo $this->t('{core:frontpage:useful_links_header}'); ?></h2> -->
<ul>
<?php
	foreach ($this->data['links_auth'] AS $link) {
		echo '<li><a href="' . htmlspecialchars($link['href']) . '">' . $this->t($link['text']) . '</a>';
		if (isset($link['deprecated']) && $link['deprecated']) {
			echo ' <b>' . $this->t('{core:frontpage:deprecated}') . '</b>';
		}
		echo '</li>';
	}
?>
</ul>

	

		
<?php $this->includeAtTemplateBase('includes/footer.php'); ?>