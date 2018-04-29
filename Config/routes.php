<?php
Router::connect('/faq/', array('controller' => 'faq', 'action' => 'index', 'plugin' => 'MyFaq'));
Router::connect('/faq', array('controller' => 'faq', 'action' => 'index', 'plugin' => 'MyFaq'));
Router::connect('/myfaq/', array('controller' => 'faq', 'action' => 'index', 'plugin' => 'MyFaq'));
Router::connect('/myfaq', array('controller' => 'faq', 'action' => 'index', 'plugin' => 'MyFaq'));
Router::connect('/faq/ajax_get_faq/*', array('controller' => 'faq', 'action' => 'ajax_get_faq', 'plugin' => 'MyFaq'));

Router::connect('/admin/faq/faq', array('controller' => 'faq', 'action' => 'index', 'plugin' => 'MyFaq', 'admin' => true));
Router::connect('/admin/faq', array('controller' => 'faq', 'action' => 'index', 'plugin' => 'MyFaq', 'admin' => true));

Router::connect('/admin/faq/ajax_save_faq', array('controller' => 'faq', 'action' => 'ajax_save_faq', 'plugin' => 'MyFaq', 'admin' => true));
Router::connect('/admin/faq/ajax_remove_faq', array('controller' => 'faq', 'action' => 'ajax_remove_faq', 'plugin' => 'MyFaq', 'admin' => true));
