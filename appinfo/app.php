<?php
/**
 * ownCloud - user_status_validator
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Dino Peng <dino.p@inwinstack.com>
 * @copyright Dino Peng 2015
 */

namespace OCA\User_Status_Validator\AppInfo;

$app = new Application();
$app->getContainer()->query('LoginHooks')->register();

