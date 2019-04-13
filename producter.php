<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/10
 * Time: 17:40
 */

$rk = new RdKafka\Producer();
$rk->setLogLevel(LOG_ERR);
$rk->addBrokers("127.0.0.1");
$topic = $rk->newTopic("test");
for ($i = 0; $i < 10; $i++) {
    $topic->produce(RD_KAFKA_PARTITION_UA, 0, "Message $i");
}