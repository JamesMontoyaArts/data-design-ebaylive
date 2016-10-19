<?php
/**
* Cross section of eBay Live company profile
*
* This is just one company that serves as an auction house through eBay Live.  It can easily be used to create new companies as they are added to eBay Live
*
* @author James Montoya <jmontoya306@cnm.edu>
*
**/

class Company {

	/**
	 * id for the company selling their catalog of lots; this is the primary key
	 * @var int $companyId
	 **/
	private $companyId;

	/**
	 * logo of the company selling the catalog of lots;
	 * @var string $companyLogo
	 **/
	private $companyLogo;

	/**
	 *address of the company selling the catalog of lots;
	 * @var string $companyAddress
	 **/
	private $companyAddress;

	/**
	 *buyer premium is the price on top of the selling price that the winner owes the "company" who sold the lots;
	 * @var int $companyBuyerPremium
	 **/
	private $companyBuyerPremium;

	/**
	 *shipping policy is the shipping standards followed by the "company"
	 * @var string $companyShippingPolicy
	 **/
	private $companyShippingPolicy;

	/**
	 *payment policy is the standard payment policy followed by the "company" and is agreed to be followed by the user
	 * @var string $companyPaymentPolicy
	 **/
	private $companyPaymentPolicy;

}

