class Main {
  public static void main (String[] args) {
    System.out.println("Hello world from Java");
    UberX uberX = new UberX("BYD787", new Account("Andres Herrera", "AND123"), "Chevrolet", "Sonic");
    uberX.setPassenger(4);
    uberX.printDataCar();

    UberVan uberVan = new UberVan("FGH345", new Account("Andres Herrera", "AND456"));
    uberVan.setPassenger(6);
    uberVan.printDataCar();
    /*Car car2 = new Car("QWE567", new Account("Andrea Herrera","ADE456" ));
    car2.passenger = 3;
    car2.printDataCar();
*/

  }
}