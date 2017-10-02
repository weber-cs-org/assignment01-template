<?php
require_once(__DIR__."/../src/02-DBMockStorage.php");
require_once(__DIR__."/../src/02-FileStorage.php");
require_once(__DIR__."/../src/02-MemStorage.php");
class StorageTest extends \PHPUnit\Framework\TestCase {
  public function testDBMockStorage00() {
    // arrange
    $harness = new DBMockStorage("MySQL", "item0");
    // act
    $actual = $harness->databaseType();
    // assert
    $this->assertEquals("MySQL", $actual);
    $this->assertEquals(1, $harness->Count());
  }
  public function testDBMockStorage01() {
    // arrange
    $harness = new DBMockStorage("MySQL", "item0");
    $harness->Put("item1");
    // act
    $actual = $harness->Count();
    // assert
    $this->assertEquals(2, $harness->Count());
  }
 public function testFileStorage00() {
    // arrange
    $harness = new FileStorage();
    $harness->Put("item0");
    // act
    $actual = $harness->Count();
    // assert
    $this->assertEquals(5, $actual);
  }
 public function testFileStorage01() {
    // arrange
    $harness = new FileStorage();
    $harness->Put("item0");
    $harness->Put("item1");
    // act
    $actual = $harness->Count();
    // assert
    $this->assertEquals(10, $actual);
  }
  public function testFileStorage02()
  {
      // arrange
      $writer = new FileStorage();
      $writer->Put("item0");
      $writer->Put("item1");
      $reader = new FileStorage(); // Don't use an instance counter.
      // act
      $actual = $reader->Count();
      // assert
      $this->assertEquals(10, $actual);
  }
  public function testFileStorage03()
  {
      // arrange
      $harness = new FileStorage();
      $harness->Put("one");
      $harness->Put("four");
      // act
      $actual = $harness->Count();
      // assert
      $this->assertEquals(7, $actual);
  }
  public function testMemStorage00() {
    // arrange
    $harness = new MemStorage("item0");
    // act
    $actual = $harness->Count();
    // assert
    $this->assertEquals(1, $actual);
  }
  public function testMemStorage01() {
    // arrange
    $harness = new MemStorage("item0");
    $harness->Put("item1");
    // act
    $actual = $harness->Count();
    // assert
    $this->assertEquals(2, $actual);
  }
  protected function tearDown() {
    system("rm -f data.txt");
  }
}
