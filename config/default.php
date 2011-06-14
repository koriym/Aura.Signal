<?php
/**
 * Dependency services.
 */
$di->set('signal_manager', function() use ($di) {
    return $di->newInstance('Aura\Signal\Manager', array(
        'handler_factory'   => $di->newInstance('Aura\Signal\HandlerFactory'),
        'result_factory'    => $di->newInstance('Aura\Signal\ResultFactory'),
        'result_collection' => new Aura\Signal\ResultCollection, // newInstance() fails with ArrayObject ?
    ));
});