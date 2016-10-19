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

	// CONSTRUCTION GOES HERE LATER

	/**
	 * accessor method for company id
	 *
	 * @return int|null value of company id
	 */
	public function getCompanyId() {
		return $this->companyId;
	}

	/**
 	* accessor method for company logo
 	*
 	* @return string of company logo
 	*/
	public function getCompanyLogo() {
		return $this->companyLogo;
	}

	/**
 * accessor method for company address
 *
 * @return string for company address
 */
	public function getCompanyAddress() {
		return $this->companyAddress;
	}

	/**
	 * accessor method for company buyer premium
	 *
	 * @return int for company buyer premium
	 */
	public function getCompanyBuyerPremium() {
		return $this->companyBuyerPremium;
	}

	/**
	 * accessor method for company shipping policy
	 *
	 * @return string for company shipping policy
	 */
	public function getCompanyShippingPolicy() {
		return $this->companyShippingPolicy;
	}

	/**
	 * accessor method for company payment policy
	 *
	 * @return string for company payment policy
	 */
	public function getCompanyPaymentPolicy() {
		return $this->companyPaymentPolicy;
	}
}



