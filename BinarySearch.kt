/**
 * You can edit, run, and share this code.
 * play.kotlinlang.org
 */
fun main() {
    val number:Double = 8.0
    val list:List<Double> = listOf(0.0, 1.0,2.0,3.0,4.0,5.0,6.0,7.0,8.0,9.0,10.0);
    val index:Int? = binarySearch(8.0, list);

    if(index != null) println("Encontrado no índice: $index");
	else println("O valor $number não foi encontrado na lista!");
}

fun binarySearch(number: Double, list : List<Double>) : Int? {
    return recursiveBinary(number, list, 0, list.size - 1);
}

fun recursiveBinary(number: Double, list : List<Double>, start : Int, end : Int) : Int? {
    if(start >= end){
        return null;
    }

    var mid:Int = (start + end) / 2;

    if(number == list[mid]){
        return mid;
    }

    if(number > list[mid]){
        return recursiveBinary(number, list, mid + 1, end);
    }

    return recursiveBinary(number, list, start, mid - 1);
}
