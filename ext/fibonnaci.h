
extern zend_class_entry *test_fibonnaci_ce;

ZEPHIR_INIT_CLASS(Test_Fibonnaci);

PHP_METHOD(Test_Fibonnaci, fibArray);

ZEPHIR_INIT_FUNCS(test_fibonnaci_method_entry) {
	PHP_ME(Test_Fibonnaci, fibArray, NULL, ZEND_ACC_PUBLIC)
	PHP_FE_END
};