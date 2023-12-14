#include <iostream>
using namespace std;
#include <string>

int main()
{
    int start = 1;
    int end = 30;
    string result;
    for (int i = start; i < end; i++) {
        if (i % 13 == 0) {
            result += to_string(i) + "\n" ;
        }
        
    }
    if(result.length() == 0) {
        result = "Không có";
    }
    cout << result << endl;

}