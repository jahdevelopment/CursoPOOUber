class UberX extends Car {
    String brand;
    String model;

    UberX(String license, Account driver, String brand, String model) {
        super(license, driver);
        this.brand = brand;
        this.model = model;
    }

    void printDataCar(){
        super.printDataCar();
        System.out.println("Model: " + model + "\nBrand: " + brand);
    }
}
