<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;

class AccountTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }
    public function testCredit(){
       $user= User::factory()->create();
       $existing_balance=$user->balance;
       $user->credit(50);
       $this->assertEquals( $existing_balance +50,$user->balance);
    }
    public function testDebit(){
        $user=User::factory()->create();
        $existing_balance=$user->balance;
        $user->debit(100);
        $this->assertEquals( $existing_balance - 100, $user->balance);
    }
    public function testTransfer(){
        $users=User::factory(2)->create();
        $user1 = $users[0];
        $user1_balance=$user1->balance;
        $user2 = $users[1];
        $user2_balance=$user2->balance;
        $user1->transfer($user2->id,100);
       $this->assertEquals($user1_balance-100,$user1->balance);
       $user2=$user2->fresh();
       $this->assertEquals($user2_balance+100,$user2->balance);
    }
    // public function testTransactions(){
    //     $user=User::factory()->create();
    //     $existing_balance =$user->balance;
    //     $user->credit(123);
    //     $transaction = $user->transactions->sortByDesc('id')->first();

    //     $this->assertEquals(123 ,$transaction->credit);
    // }
public function testTransactions()
{
    $user=User::factory()->create();
    $user->debit(100);
    $transaction=$user->transactions;
    $this->assertEquals(100,$transaction->debit);
}


}
