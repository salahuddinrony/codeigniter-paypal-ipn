<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('IpnOrders', 'default');

/**
 * BaseIpnOrders
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 *
 * @property integer $id
 * @property string $notify_version
 * @property string $verify_sign
 * @property integer $test_ipn
 * @property string $address_city
 * @property string $address_country
 * @property string $address_country_code
 * @property string $address_name
 * @property string $address_state
 * @property string $address_status
 * @property string $address_street
 * @property string $address_zip
 * @property string $first_name
 * @property string $last_name
 * @property string $payer_business_name
 * @property string $payer_email
 * @property string $payer_id
 * @property string $payer_status
 * @property string $contact_phone
 * @property string $residence_country
 * @property string $business
 * @property string $receiver_email
 * @property string $receiver_id
 * @property string $custom
 * @property string $invoice
 * @property string $memo
 * @property string $option_name_1
 * @property string $option_name_2
 * @property string $option_selection1
 * @property string $option_selection2
 * @property decimal $tax
 * @property string $auth_id
 * @property string $auth_exp
 * @property integer $auth_amount
 * @property string $auth_status
 * @property integer $num_cart_items
 * @property string $parent_txn_id
 * @property string $payment_date
 * @property string $payment_status
 * @property string $payment_type
 * @property string $pending_reason
 * @property string $reason_code
 * @property integer $remaining_settle
 * @property string $shipping_method
 * @property decimal $shipping
 * @property string $transaction_entity
 * @property string $txn_id
 * @property string $txn_type
 * @property decimal $exchange_rate
 * @property string $mc_currency
 * @property decimal $mc_fee
 * @property decimal $mc_gross
 * @property decimal $mc_handling
 * @property decimal $mc_shipping
 * @property decimal $payment_fee
 * @property decimal $payment_gross
 * @property decimal $settle_amount
 * @property string $settle_currency
 * @property string $auction_buyer_id
 * @property string $auction_closing_date
 * @property integer $auction_multi_item
 * @property string $for_auction
 * @property string $subscr_date
 * @property string $subscr_effective
 * @property string $period1
 * @property string $period2
 * @property string $period3
 * @property decimal $amount1
 * @property decimal $amount2
 * @property decimal $amount3
 * @property decimal $mc_amount1
 * @property decimal $mc_amount2
 * @property decimal $mc_amount3
 * @property string $recurring
 * @property string $reattempt
 * @property string $retry_at
 * @property integer $recur_times
 * @property string $username
 * @property string $password
 * @property string $subscr_id
 * @property string $case_id
 * @property string $case_type
 * @property string $case_creation_date
 * @property timestamp $created_at
 * @property timestamp $updated_at
 *
 * @package    codeigniter-paypal-ipn
 * @author     Alexander Dean, alex@keplarllp.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 *
 * This file is copyright (c) 2011 Alexander Dean, github@keplarllp.com
 *
 * This file is part of codeigniter-paypal-ipn
 * 
 * codeigniter-paypal-ipn is free software: you can redistribute it and/or modify it under the
 * terms of the GNU Affero General Public License as published by the Free Software Foundation,
 * either version 3 of the License, or (at your option) any later version.
 * 
 * codeigniter-paypal-ipn is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR
 * PURPOSE. See the GNU Affero General Public License for more details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * codeigniter-paypal-ipn. If not, see <http://www.gnu.org/licenses/>.
 */
abstract class BaseIpnOrders extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('ipn_orders');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('notify_version', 'string', 64, array(
             'type' => 'string',
             'length' => 64,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('verify_sign', 'string', 127, array(
             'type' => 'string',
             'length' => 127,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('test_ipn', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('protection_eligibility', 'string', 24, array(
             'type' => 'string',
             'length' => 24,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('charset', 'string', 127, array(
             'type' => 'string',
             'length' => 127,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
		$this->hasColumn('btn_id', 'string', 40, array(
             'type' => 'string',
             'length' => 40,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
		$this->hasColumn('address_city', 'string', 40, array(
             'type' => 'string',
             'length' => 40,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('address_country', 'string', 64, array(
             'type' => 'string',
             'length' => 64,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('address_country_code', 'string', 2, array(
             'type' => 'string',
             'length' => 2,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('address_name', 'string', 128, array(
             'type' => 'string',
             'length' => 128,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('address_state', 'string', 40, array(
             'type' => 'string',
             'length' => 40,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('address_status', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('address_street', 'string', 200, array(
             'type' => 'string',
             'length' => 200,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('address_zip', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('first_name', 'string', 64, array(
             'type' => 'string',
             'length' => 64,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('last_name', 'string', 64, array(
             'type' => 'string',
             'length' => 64,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('payer_business_name', 'string', 127, array(
             'type' => 'string',
             'length' => 127,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('payer_email', 'string', 127, array(
             'type' => 'string',
             'length' => 127,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('payer_id', 'string', 13, array(
             'type' => 'string',
             'length' => 13,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('payer_status', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('contact_phone', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('residence_country', 'string', 2, array(
             'type' => 'string',
             'length' => 2,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('business', 'string', 127, array(
             'type' => 'string',
             'length' => 127,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('receiver_email', 'string', 127, array(
             'type' => 'string',
             'length' => 127,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('receiver_id', 'string', 13, array(
             'type' => 'string',
             'length' => 13,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('custom', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('invoice', 'string', 127, array(
             'type' => 'string',
             'length' => 127,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('memo', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('option_name_1', 'string', 64, array(
             'type' => 'string',
             'length' => 64,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('option_name_2', 'string', 64, array(
             'type' => 'string',
             'length' => 64,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('option_selection1', 'string', 200, array(
             'type' => 'string',
             'length' => 200,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('option_selection2', 'string', 200, array(
             'type' => 'string',
             'length' => 200,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('tax', 'decimal', 10, array(
             'type' => 'decimal',
             'length' => 10,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'scale' => '2',
             ));
        $this->hasColumn('auth_id', 'string', 19, array(
             'type' => 'string',
             'length' => 19,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('auth_exp', 'string', 28, array(
             'type' => 'string',
             'length' => 28,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('auth_amount', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('auth_status', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('num_cart_items', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('parent_txn_id', 'string', 19, array(
             'type' => 'string',
             'length' => 19,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('payment_date', 'string', 28, array(
             'type' => 'string',
             'length' => 28,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('payment_status', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('payment_type', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('pending_reason', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('reason_code', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('remaining_settle', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('shipping_method', 'string', 64, array(
             'type' => 'string',
             'length' => 64,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('shipping', 'decimal', 10, array(
             'type' => 'decimal',
             'length' => 10,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'scale' => '2',
             ));
        $this->hasColumn('transaction_entity', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('txn_id', 'string', 19, array(
             'type' => 'string',
             'length' => 19,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('txn_type', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('exchange_rate', 'decimal', 10, array(
             'type' => 'decimal',
             'length' => 10,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'scale' => '2',
             ));
        $this->hasColumn('mc_currency', 'string', 3, array(
             'type' => 'string',
             'length' => 3,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('mc_fee', 'decimal', 10, array(
             'type' => 'decimal',
             'length' => 10,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'scale' => '2',
             ));
        $this->hasColumn('mc_gross', 'decimal', 10, array(
             'type' => 'decimal',
             'length' => 10,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'scale' => '2',
             ));
        $this->hasColumn('mc_handling', 'decimal', 10, array(
             'type' => 'decimal',
             'length' => 10,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'scale' => '2',
             ));
        $this->hasColumn('mc_shipping', 'decimal', 10, array(
             'type' => 'decimal',
             'length' => 10,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'scale' => '2',
             ));
        $this->hasColumn('payment_fee', 'decimal', 10, array(
             'type' => 'decimal',
             'length' => 10,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'scale' => '2',
             ));
        $this->hasColumn('payment_gross', 'decimal', 10, array(
             'type' => 'decimal',
             'length' => 10,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'scale' => '2',
             ));
        $this->hasColumn('settle_amount', 'decimal', 10, array(
             'type' => 'decimal',
             'length' => 10,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'scale' => '2',
             ));
        $this->hasColumn('settle_currency', 'string', 3, array(
             'type' => 'string',
             'length' => 3,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('auction_buyer_id', 'string', 64, array(
             'type' => 'string',
             'length' => 64,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('auction_closing_date', 'string', 28, array(
             'type' => 'string',
             'length' => 28,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('auction_multi_item', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('for_auction', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('subscr_date', 'string', 28, array(
             'type' => 'string',
             'length' => 28,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('subscr_effective', 'string', 28, array(
             'type' => 'string',
             'length' => 28,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('period1', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('period2', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('period3', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('amount1', 'decimal', 10, array(
             'type' => 'decimal',
             'length' => 10,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'scale' => '2',
             ));
        $this->hasColumn('amount2', 'decimal', 10, array(
             'type' => 'decimal',
             'length' => 10,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'scale' => '2',
             ));
        $this->hasColumn('amount3', 'decimal', 10, array(
             'type' => 'decimal',
             'length' => 10,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'scale' => '2',
             ));
        $this->hasColumn('mc_amount1', 'decimal', 10, array(
             'type' => 'decimal',
             'length' => 10,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'scale' => '2',
             ));
        $this->hasColumn('mc_amount2', 'decimal', 10, array(
             'type' => 'decimal',
             'length' => 10,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'scale' => '2',
             ));
        $this->hasColumn('mc_amount3', 'decimal', 10, array(
             'type' => 'decimal',
             'length' => 10,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'scale' => '2',
             ));
        $this->hasColumn('recurring', 'string', 1, array(
             'type' => 'string',
             'length' => 1,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('reattempt', 'string', 1, array(
             'type' => 'string',
             'length' => 1,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('retry_at', 'string', 28, array(
             'type' => 'string',
             'length' => 28,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('recur_times', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('username', 'string', 64, array(
             'type' => 'string',
             'length' => 64,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('password', 'string', 24, array(
             'type' => 'string',
             'length' => 24,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('subscr_id', 'string', 19, array(
             'type' => 'string',
             'length' => 19,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('case_id', 'string', 28, array(
             'type' => 'string',
             'length' => 28,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('case_type', 'string', 28, array(
             'type' => 'string',
             'length' => 28,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('case_creation_date', 'string', 28, array(
             'type' => 'string',
             'length' => 28,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('order_status', 'enum', 8, array(
             'type' => 'enum',
             'length' => 8,
             'fixed' => false,
             'unsigned' => false,
             'values' =>
             array(
              0 => 'PAID',
              1 => 'WAITING',
              2 => 'REJECTED',
             ),
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('discount', 'decimal', 10, array(
             'type' => 'decimal',
             'length' => 10,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'scale' => '2',
             ));
		$this->hasColumn('shipping_discount', 'decimal', 10, array(
             'type' => 'decimal',
             'length' => 10,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'scale' => '2',
             ));
        $this->hasColumn('ipn_track_id', 'string', 127, array(
             'type' => 'string',
             'length' => 127,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('transaction_subject', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('created_at', 'timestamp', null, array(
             'type' => 'timestamp',
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('updated_at', 'timestamp', null, array(
             'type' => 'timestamp',
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();

    }
}
