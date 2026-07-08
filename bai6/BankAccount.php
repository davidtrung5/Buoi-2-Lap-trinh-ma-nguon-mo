<?php
class BankAccount {
    public $accountNumber;
    public $accountName;
    public $balance;

    public function __construct($accountNumber, $accountName, $balance = 0) {
        $this->accountNumber = $accountNumber;
        $this->accountName = $accountName;
        $this->balance = $balance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
        echo "Đã nạp $amount vào tài khoản. Số dư mới: {$this->balance}<br>";
    }

    public function withdraw($amount) {
        if ($amount > $this->balance) {
            echo "Lỗi: Số dư không đủ để rút $amount!<br>";
        } else {
            $this->balance -= $amount;
            echo "Đã rút $amount. Số dư còn lại: {$this->balance}<br>";
        }
    }

    public function displayBalance() {
        echo "Tài khoản: {$this->accountNumber} | Chủ thẻ: {$this->accountName} | Số dư: {$this->balance}<br>";
    }
}

$myAccount = new BankAccount("123456789", "Mai Duc Trung", 50000);
$myAccount->displayBalance();
$myAccount->deposit(20000);
$myAccount->withdraw(100000); 
$myAccount->withdraw(30000); 
?>