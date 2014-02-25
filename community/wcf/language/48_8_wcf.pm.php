<?php
/**
* WoltLab Community Framework
* language: it
* encoding: UTF-8
* category: wcf.pm
* generated at Thu, 15 Aug 2013 01:21:50 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->items[$this->languageID]['wcf.pm.addFolder'] = 'Aggiungi cartella';
$this->items[$this->languageID]['wcf.pm.addFolder.color'] = 'Color:';
$this->items[$this->languageID]['wcf.pm.addFolder.color.blue'] = 'Blue';
$this->items[$this->languageID]['wcf.pm.addFolder.color.green'] = 'Green';
$this->items[$this->languageID]['wcf.pm.addFolder.color.red'] = 'Red';
$this->items[$this->languageID]['wcf.pm.addFolder.color.white'] = 'White';
$this->items[$this->languageID]['wcf.pm.addFolder.color.yellow'] = 'Yellow';
$this->items[$this->languageID]['wcf.pm.addFolder.success'] = 'La nuova cartella è stata aggiunta con successo.';
$this->items[$this->languageID]['wcf.pm.author'] = 'Autore';
$this->items[$this->languageID]['wcf.pm.author.system'] = 'Sistema';
$this->items[$this->languageID]['wcf.pm.button.cancel'] = 'Cancella';
$this->items[$this->languageID]['wcf.pm.button.download'] = 'Scarica';
$this->items[$this->languageID]['wcf.pm.button.downloadDialogue'] = 'Download dialogue';
$this->items[$this->languageID]['wcf.pm.button.edit'] = 'Modifica';
$this->items[$this->languageID]['wcf.pm.button.emptyRecycleBin'] = 'Svuota Cestino';
$this->items[$this->languageID]['wcf.pm.button.forward'] = 'Inoltra';
$this->items[$this->languageID]['wcf.pm.button.markAll'] = 'Select all';
$this->items[$this->languageID]['wcf.pm.button.markAsRead'] = 'Segna come letto';
$this->items[$this->languageID]['wcf.pm.button.markAsUnread'] = 'Segna come non letto';
$this->items[$this->languageID]['wcf.pm.button.moveTo'] = 'Sposta nel {literal}{$folder}{/literal}';
$this->dynamicItems[$this->languageID]['wcf.pm.button.moveTo'] = 'Sposta nel {$folder}';
$this->items[$this->languageID]['wcf.pm.button.newMessage'] = 'Nuovo messaggio';
$this->items[$this->languageID]['wcf.pm.button.recover'] = 'Ripristina';
$this->items[$this->languageID]['wcf.pm.button.reply'] = 'Rispondi';
$this->items[$this->languageID]['wcf.pm.button.replyToAll'] = 'Rispondi a tutti';
$this->items[$this->languageID]['wcf.pm.button.saveAsDraft'] = 'Salva come bozza';
$this->items[$this->languageID]['wcf.pm.cancel.sure'] = 'Siete sicuri di voler cancellare questo messaggio?';
$this->items[$this->languageID]['wcf.pm.cancelMarked.sure'] = 'Siete sicuri di voler cancellare i messaggi selezionati?';
$this->items[$this->languageID]['wcf.pm.date'] = 'Data';
$this->items[$this->languageID]['wcf.pm.delete.sure'] = 'Siete sicuri di voler cancellare questo messaggio?';
$this->items[$this->languageID]['wcf.pm.deleteFolder'] = 'Cancella cartella';
$this->items[$this->languageID]['wcf.pm.deleteFolder.success'] = 'La cartella è stata cancellata con successo.';
$this->items[$this->languageID]['wcf.pm.deleteFolder.sure'] = 'Siete sicuri di voler cancellare questa cartella?';
$this->items[$this->languageID]['wcf.pm.deleteMarked.sure'] = 'Siete sicuri di voler cancellare i messaggi selezionati?';
$this->items[$this->languageID]['wcf.pm.dialogue'] = 'Conversazione';
$this->items[$this->languageID]['wcf.pm.download.message'] = 'Messaggio da: {$author}
Data: {$date}
A: {$recipient}
Oggetto: {$subject}

{$text}';
$this->dynamicItems[$this->languageID]['wcf.pm.download.message'] = 'Messaggio da: <?php echo StringUtil::encodeHTML($this->v[\'author\']); ?>
Data: <?php echo StringUtil::encodeHTML($this->v[\'date\']); ?>
A: <?php echo StringUtil::encodeHTML($this->v[\'recipient\']); ?>
Oggetto: <?php echo StringUtil::encodeHTML($this->v[\'subject\']); ?>

<?php echo StringUtil::encodeHTML($this->v[\'text\']); ?>';
$this->items[$this->languageID]['wcf.pm.drafts'] = 'Bozze';
$this->items[$this->languageID]['wcf.pm.editFolders'] = 'Gestione cartelle';
$this->items[$this->languageID]['wcf.pm.editRules'] = 'Manage rules';
$this->items[$this->languageID]['wcf.pm.emptyRecycleBin.sure'] = 'Vuoi veramente svuotare il cestino?';
$this->items[$this->languageID]['wcf.pm.error.addFolder.tooManyFolders'] = 'Non puoi aggiungere ulteriori cartelle. Puoi disporre di un massimo di $this->getUser()->getPermission(\'user.pm.maxFolders\') cartelle.';
$this->items[$this->languageID]['wcf.pm.error.mailboxIsFull'] = 'La tua casella di posta è piena. Devi cancellare messaggi prima di poterne scrivere nuovi.';
$this->items[$this->languageID]['wcf.pm.error.recipient.canNotUsePm'] = '&quot;{$error.username}&quot; non può ricevere messaggi.';
$this->dynamicItems[$this->languageID]['wcf.pm.error.recipient.canNotUsePm'] = '&quot;<?php echo StringUtil::encodeHTML($this->v[\'error\'][\'username\']); ?>&quot; non può ricevere messaggi.';
$this->items[$this->languageID]['wcf.pm.error.recipient.doesNotAcceptPm'] = '&quot;{$error.username}&quot; non vuole ricevere messaggi.';
$this->dynamicItems[$this->languageID]['wcf.pm.error.recipient.doesNotAcceptPm'] = '&quot;<?php echo StringUtil::encodeHTML($this->v[\'error\'][\'username\']); ?>&quot; non vuole ricevere messaggi.';
$this->items[$this->languageID]['wcf.pm.error.recipient.ignoresYou'] = '&quot;{$error.username}&quot; ti ignora.';
$this->dynamicItems[$this->languageID]['wcf.pm.error.recipient.ignoresYou'] = '&quot;<?php echo StringUtil::encodeHTML($this->v[\'error\'][\'username\']); ?>&quot; ti ignora.';
$this->items[$this->languageID]['wcf.pm.error.recipient.notFound'] = '&quot;{$error.username}&quot; non esiste.';
$this->dynamicItems[$this->languageID]['wcf.pm.error.recipient.notFound'] = '&quot;<?php echo StringUtil::encodeHTML($this->v[\'error\'][\'username\']); ?>&quot; non esiste.';
$this->items[$this->languageID]['wcf.pm.error.recipient.onlyAcceptsPmFromBuddies'] = '&quot;{$error.username}&quot; vuole ricevere messaggi solo dai suoi amici.';
$this->dynamicItems[$this->languageID]['wcf.pm.error.recipient.onlyAcceptsPmFromBuddies'] = '&quot;<?php echo StringUtil::encodeHTML($this->v[\'error\'][\'username\']); ?>&quot; vuole ricevere messaggi solo dai suoi amici.';
$this->items[$this->languageID]['wcf.pm.error.recipient.recipientsMailboxIsFull'] = 'La casella dei messaggi in arrivo di &quot;{$error.username}&quot; risulta piena.';
$this->dynamicItems[$this->languageID]['wcf.pm.error.recipient.recipientsMailboxIsFull'] = 'La casella dei messaggi in arrivo di &quot;<?php echo StringUtil::encodeHTML($this->v[\'error\'][\'username\']); ?>&quot; risulta piena.';
$this->items[$this->languageID]['wcf.pm.error.recipient.tooManyRecipients'] = 'Avete selezionato troppi destinatari. Potete indicare un massimo di {#$this->getUser()->getPermission(\'user.pm.maxRecipients\')} destinatari per messaggio.';
$this->dynamicItems[$this->languageID]['wcf.pm.error.recipient.tooManyRecipients'] = 'Avete selezionato troppi destinatari. Potete indicare un massimo di <?php echo StringUtil::formatNumeric($this->v[\'this\']->getUser()->getPermission(\'user.pm.maxRecipients\')); ?> destinatari per messaggio.';
$this->items[$this->languageID]['wcf.pm.existingFolders'] = 'Cartelle esistenti';
$this->items[$this->languageID]['wcf.pm.feed'] = 'Private Message Feed';
$this->items[$this->languageID]['wcf.pm.feed.description'] = 'Private Messages from the site: {lang}{PAGE_TITLE}{/lang}';
$this->dynamicItems[$this->languageID]['wcf.pm.feed.description'] = 'Private Messages from the site: <?php $this->tagStack[] = array(\'lang\', array()); ob_start(); ?><?php echo StringUtil::encodeHTML(PAGE_TITLE); ?><?php $_langf0c2c01e1a513a11bdb70d480c6e575ab6ef8e84 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_langf0c2c01e1a513a11bdb70d480c6e575ab6ef8e84, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?>';
$this->items[$this->languageID]['wcf.pm.feed.title'] = '{lang}{PAGE_TITLE}{/lang} - Private Messages';
$this->dynamicItems[$this->languageID]['wcf.pm.feed.title'] = '<?php $this->tagStack[] = array(\'lang\', array()); ob_start(); ?><?php echo StringUtil::encodeHTML(PAGE_TITLE); ?><?php $_langdd36644bde0061f1f70c9ea5efcb64401e7b6064 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_langdd36644bde0061f1f70c9ea5efcb64401e7b6064, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?> - Private Messages';
$this->items[$this->languageID]['wcf.pm.filterBySender'] = 'Sender';
$this->items[$this->languageID]['wcf.pm.forward.subject'] = 'FW: {$subject}';
$this->dynamicItems[$this->languageID]['wcf.pm.forward.subject'] = 'FW: <?php echo StringUtil::encodeHTML($this->v[\'subject\']); ?>';
$this->items[$this->languageID]['wcf.pm.forward.text'] = '

[quote=\'{$author}\']
[i]Inviato: {$date}
A: {$recipients}
Oggetto: {$subject}[/i]

{$text}[/quote]';
$this->dynamicItems[$this->languageID]['wcf.pm.forward.text'] = '

[quote=\'<?php echo StringUtil::encodeHTML($this->v[\'author\']); ?>\']
[i]Inviato: <?php echo StringUtil::encodeHTML($this->v[\'date\']); ?>
A: <?php echo StringUtil::encodeHTML($this->v[\'recipients\']); ?>
Oggetto: <?php echo StringUtil::encodeHTML($this->v[\'subject\']); ?>[/i]

<?php echo StringUtil::encodeHTML($this->v[\'text\']); ?>[/quote]';
$this->items[$this->languageID]['wcf.pm.from'] = 'From';
$this->items[$this->languageID]['wcf.pm.inbox'] = 'In arrivo';
$this->items[$this->languageID]['wcf.pm.information'] = 'Informazioni messaggio';
$this->items[$this->languageID]['wcf.pm.invisibleRecipients'] = 'Destinatari invisibili';
$this->items[$this->languageID]['wcf.pm.markAsReadByDoubleClick'] = 'Imposta il messaggio come letto attraverso un doppio click';
$this->items[$this->languageID]['wcf.pm.markedMessages'] = 'this.count == 1 ? "Un messaggio selezionato" : this.count+" messaggi selezionati"';
$this->items[$this->languageID]['wcf.pm.messageFrom'] = 'da';
$this->items[$this->languageID]['wcf.pm.moveMessageTo'] = 'Sposta il messaggio nella cartella:';
$this->items[$this->languageID]['wcf.pm.newMessage'] = 'Crea nuovo messaggio';
$this->items[$this->languageID]['wcf.pm.noMessages'] = 'Questa cartella non contiene alcun messaggio.';
$this->items[$this->languageID]['wcf.pm.notification.cancel'] = 'Cancella notifica';
$this->items[$this->languageID]['wcf.pm.notification.mail'] = 'Ciao {$recipient},

Avete ricevuto un nuovo messaggio privato da {$author}:
---------------------------------
Oggetto: {$subject}
{$text}
---------------------------------

Per visualizzare la sezione privata contenente i tuoi messaggi privati, clicca sul link che segue:
{PAGE_URL}/index.php?page=PMList


Arrivederci,
Il team di {PAGE_TITLE}';
$this->dynamicItems[$this->languageID]['wcf.pm.notification.mail'] = 'Ciao <?php echo StringUtil::encodeHTML($this->v[\'recipient\']); ?>,

Avete ricevuto un nuovo messaggio privato da <?php echo StringUtil::encodeHTML($this->v[\'author\']); ?>:
---------------------------------
Oggetto: <?php echo StringUtil::encodeHTML($this->v[\'subject\']); ?>
<?php echo StringUtil::encodeHTML($this->v[\'text\']); ?>
---------------------------------

Per visualizzare la sezione privata contenente i tuoi messaggi privati, clicca sul link che segue:
<?php echo StringUtil::encodeHTML(PAGE_URL); ?>/index.php?page=PMList


Arrivederci,
Il team di <?php echo StringUtil::encodeHTML(PAGE_TITLE); ?>';
$this->items[$this->languageID]['wcf.pm.notification.report'] = '{if $this->user->pmOutstandingNotifications > 1}Ci sono {#$this->user->pmOutstandingNotifications} messaggi privati nuovi{else}C\'è un messaggio privato nuovo {/if}:';
$this->dynamicItems[$this->languageID]['wcf.pm.notification.report'] = '<?php if ($this->v[\'this\']->user->pmOutstandingNotifications > 1) { ?>Ci sono <?php echo StringUtil::formatNumeric($this->v[\'this\']->user->pmOutstandingNotifications); ?> messaggi privati nuovi<?php } else { ?>C\'è un messaggio privato nuovo <?php } ?>:';
$this->items[$this->languageID]['wcf.pm.notification.subject'] = 'Nuovo messaggio da {$author} su {PAGE_TITLE}';
$this->dynamicItems[$this->languageID]['wcf.pm.notification.subject'] = 'Nuovo messaggio da <?php echo StringUtil::encodeHTML($this->v[\'author\']); ?> su <?php echo StringUtil::encodeHTML(PAGE_TITLE); ?>';
$this->items[$this->languageID]['wcf.pm.originalMessage'] = 'Messaggio originario';
$this->items[$this->languageID]['wcf.pm.outbox'] = 'In uscita';
$this->items[$this->languageID]['wcf.pm.profile.sendPM'] = 'Invia messaggio privato';
$this->items[$this->languageID]['wcf.pm.recipient'] = 'Destinatario';
$this->items[$this->languageID]['wcf.pm.recipientList'] = 'Destinatari:';
$this->items[$this->languageID]['wcf.pm.renameFolders.success'] = 'Le cartelle sono state rinominate con successo.';
$this->items[$this->languageID]['wcf.pm.reply.subject'] = 'RE: {$subject}';
$this->dynamicItems[$this->languageID]['wcf.pm.reply.subject'] = 'RE: <?php echo StringUtil::encodeHTML($this->v[\'subject\']); ?>';
$this->items[$this->languageID]['wcf.pm.search.folders'] = 'Cerca nelle seguenti cartelle';
$this->items[$this->languageID]['wcf.pm.search.folders.all'] = 'Cerca in tutte le cartelle';
$this->items[$this->languageID]['wcf.pm.search.query'] = 'Cerca messaggi';
$this->items[$this->languageID]['wcf.pm.search.result.sender'] = 'Messaggio privato da: <a href="index.php?page=User&amp;userID={@$item.message->userID}{@SID_ARG_2ND}">{$item.message->username}</a>';
$this->dynamicItems[$this->languageID]['wcf.pm.search.result.sender'] = 'Messaggio privato da: <a href="index.php?page=User&amp;userID=<?php echo $this->v[\'item\'][\'message\']->userID; ?><?php echo SID_ARG_2ND; ?>"><?php echo StringUtil::encodeHTML($this->v[\'item\'][\'message\']->username); ?></a>';
$this->items[$this->languageID]['wcf.pm.sortBy'] = 'Sort by';
$this->items[$this->languageID]['wcf.pm.sortBy.isViewed'] = 'Read';
$this->items[$this->languageID]['wcf.pm.sortBy.isViewedByAll'] = 'Read';
$this->items[$this->languageID]['wcf.pm.sortBy.recipients'] = 'Recipients';
$this->items[$this->languageID]['wcf.pm.sortBy.subject'] = 'Subject';
$this->items[$this->languageID]['wcf.pm.sortBy.time'] = 'Date';
$this->items[$this->languageID]['wcf.pm.sortBy.username'] = 'Author';
$this->items[$this->languageID]['wcf.pm.sorting'] = 'Sorting';
$this->items[$this->languageID]['wcf.pm.subject'] = 'Oggetto';
$this->items[$this->languageID]['wcf.pm.subject.description'] = 'Enter the subject of this message.';
$this->items[$this->languageID]['wcf.pm.text'] = 'Messaggio';
$this->items[$this->languageID]['wcf.pm.text.description'] = 'Enter the text of the private message that you want to send.';
$this->items[$this->languageID]['wcf.pm.title'] = 'Messaggi privati';
$this->items[$this->languageID]['wcf.pm.trash'] = 'Cestino';
$this->items[$this->languageID]['wcf.pm.usage'] = '{@$usage*100|floor}% dello spazio in uso';
$this->dynamicItems[$this->languageID]['wcf.pm.usage'] = '<?php echo floor($this->v[\'usage\']*100); ?>% dello spazio in uso';
$this->items[$this->languageID]['wcf.pm.userMenu.mailboxIsFull'] = '(Mail box piena)';
$this->items[$this->languageID]['wcf.pm.visibleRecipients'] = 'Destinatari visibili';
?>