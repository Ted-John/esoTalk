<?php
// Copyright 2011 Toby Zerner, Simon Zerner
// This file is part of esoTalk. Please see the included license file for usage information.

if (!defined("IN_ESOTALK")) exit;

/**
 * Displays the conversation list - a table with each conversation as a row.
 *
 * @package esoTalk
 */
?>
<ul class='list conversationList'>

<?php
// Loop through the conversations and output a table row for each one.
foreach ($data["results"] as $conversation):
$this->renderView("conversations/conversation", $data + array("conversation" => $conversation));
endforeach;

?>

<?php if ($data["showViewMoreLink"]): ?>
<li class='viewMore'>
<a href='<?php echo URL("conversations/".$data["channelSlug"]."?search=".urlencode($data["searchString"].($data["searchString"] ? " + " : "")."#".T("gambit.more results"))); ?>'><?php echo T("View more"); ?></a>
</li>
<?php endif; ?>

</ul>