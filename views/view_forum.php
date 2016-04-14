<!-- Sam Neven -->
<div id="content">
	<div class="container">
		<table width="90%" border="1" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
		<tr>
		<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Delete</strong></td>
		<td width="40%" align="center" bgcolor="#E6E6E6"><strong>Onderwerp</strong></td>
		<td width="15%" align="center" bgcolor="#E6E6E6"><strong>Bekeken</strong></td>
		<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Beantwoord</strong></td>
		<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Datum/Tijd</strong></td>
		</tr>
		
		<?php if($query): foreach($query as $post): ?>
		<tr>
		<!-- om te editen en deleten hebben we van volgende website gebruik gemaakt  http://imsocode.com/?p=285 -->
		<td align="center" bgcolor="#FFFFFF"><a href="<?php echo base_url().'forum/deleteTopic/'.$post->id ?>" >Delete</a> </td>
		<td align="center" bgcolor="#FFFFFF"><?php echo anchor(base_url().'forum/details/'.$post->id,$post->subject, 'title="Klik voor meer details"') ?></td>
		<td align="center" bgcolor="#FFFFFF"><?php echo $post->view; ?></td>
		<td align="center" bgcolor="#FFFFFF"><?php echo $post->reply; ?></td> 
		<td align="center" bgcolor="#FFFFFF"><?php echo $post->datetime; ?></td>
		</tr>
		
		<?php endforeach; else: ?>
		<h1>Nog geen onderwerp</h1>
		<?php endif; ?>
		
		<tr>
		<td colspan="5" align="right" bgcolor="#E6E6E6"><a href="<?php echo base_url();?>nieuw_onderwerp"><strong>Schrijf Nieuwe Post</strong> </a></td>
		</tr>
		</table>
	</div>
</div>