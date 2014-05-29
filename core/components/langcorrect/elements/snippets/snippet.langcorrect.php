<?php
if (isset($_GET['noncorrect'])) return $input;
require_once $modx->getOption('core_path').'components/langcorrect/libs/Text_LangCorrect-1.4.3/ReflectionTypeHint.php';
require_once $modx->getOption('core_path').'components/langcorrect/libs/Text_LangCorrect-1.4.3/Text/LangCorrect.php';
require_once $modx->getOption('core_path').'components/langcorrect/libs/Text_LangCorrect-1.4.3/UTF8.php';
$corrector = new Text_LangCorrect();
$output = $corrector->parse($input, $corrector::KEYBOARD_LAYOUT);
if ($output != $input) {
    $modx->lexicon->load('langcorrect:default');
    $modx->setPlaceholder('lc.message', $modx->lexicon('langcorrect_success_msg', array('text' => $input)));
}
return $output;