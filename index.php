<?php
declare(strict_types=1);

require_once 'autoload.php';

use Classes\Director;
use Classes\Manager;
use Classes\Programmer;
use Classes\Tester;
use Classes\Worker;

$director = new Director('Ivan', 'Petrov', 20);
echo "{$director->getName()}, позиция {$director->getPosition()}, зарплата {$director->getSalary()} попугаев, {$director->skillsManager('управлять филиалом')} " . PHP_EOL;
$workers[] = $director->getSalary();

$manager = new Manager('Никита', 'Шировов', 18);
echo "{$manager->getName()}, позиция {$manager->getPosition()}, зарплата {$manager->getSalary()} попугаев, {$manager->skillsManager('управлять отделом')}, {$manager->skillsWebinar('по планированию работы и общению с заказчиками')} " . PHP_EOL;
$workers[] = $manager->getSalary();

$programmer = new Programmer('Петр', 'Загибов', 17);
echo "{$programmer->getName()}, позиция {$programmer->getPosition()}, зарплата {$programmer->getSalary()} попугаев, {$programmer->skillsCreator('писать код')}, {$programmer->skillsWebinar('кодированию кода')} " . PHP_EOL;
$workers[] = $programmer->getSalary();

$tester = new Tester('Виктор', 'Проверялкин', 14);
echo "{$tester->getName()}, позиция {$tester->getPosition()}, зарплата {$tester->getSalary()} попугаев, {$tester->skillsCreator('вносить предложения по улучшению и недостаткам приложения')}, {$tester->skillsWebinar('обсуждению неисправностей приложения')} " . PHP_EOL;
$workers[] = $tester->getSalary();

$worker = new Worker('Марк', 'Верховитц', 20);
echo "{$worker->getName()}, позиция {$worker->getPosition()}, зарплата {$worker->getSalary()} попугаев, {$worker->skillsWebinar('настраивать вебинары для всех остальных сотрудников')} " . PHP_EOL;
$workers[] = $worker->getSalary();

echo PHP_EOL . PHP_EOL . "Общее количество сотрудников: " . count($workers) . PHP_EOL;
echo "Общая сумма зарплат: " . array_sum($workers) . " попугаев" . PHP_EOL;