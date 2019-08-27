<?php
/**
* @category BDCrops Inc.
* @package BDC\Newsletter or bdc/module-newsletter
* @author Abdul Matin <matinict@gmail.com / info@bdcrops.com >
* @copyright Copyright (c) 2019 BDCrops, Ltd (http://www.bdcrops.com)
* @license http://opensource.org/licenses/afl-3.0.php Academic Free License (AFL 3.0)
 */

namespace BDC\Newsletter\Plugin\Newsletter;

use Magento\Framework\App\Request\Http;

class Subscriber {
  protected $request;

  public function __construct(
    Http $request
  ) {
    $this->request = $request;
  }

  public function aroundSubscribe($subject, \Closure $proceed, $email) {
    $result = $proceed($email);
    if ($this->request->isPost() && $this->request->getPost('firstname')) {
      $firstname = $this->request->getPost('firstname');
      $lastname = $this->request->getPost('lastname');
      $gender = $this->request->getPost('gender');

      $subject->setCFirstname($firstname);
      $subject->setCLastname($lastname);
      $subject->setGender($gender);

      try {
        $subject->save();
      }catch (\Exception $e) {
        throw new \Exception($e->getMessage());
      }
    }

    return $result;
  }
}
