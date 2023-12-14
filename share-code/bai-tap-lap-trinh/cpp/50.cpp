#include <iostream>
using namespace std;
#include <string>
int main()
{
    int number = -999;
    string strOne = "dương";
    string strTwo = "chẵn";

    if (number < 0) {strOne = "âm";}
    if (number % 2 != 0) {strTwo = "lẻ";}
   
    cout << "Số nguyên " << strOne << " " << strTwo;
}
