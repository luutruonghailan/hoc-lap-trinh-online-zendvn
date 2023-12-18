#include <iostream>
using namespace std;
#include <ctime>
int main()
{   
     // tạo giá trị ngẫu nhiên theo thời gian thực
    srand(time(NULL));
    // Rand tạo giá trị ngẫu nhiên [0, RAND_MAX] không theo thời gian thực
    cout << "Rand max: " << RAND_MAX << endl;
    // Tìm 1 giá trị ngẫu nhiên
    cout << "rand: " << rand() << endl;
    // Giá trị ngẫu nhiên thuộc khoảng nào đó
    int startNumber     = 19;
    int endNumber       = 12;
    int range           = endNumber - startNumber + 1;
    // [14,15,16,17,18,19] ==> 6 giá trị 19 - 14 + 1 = 6
    // rand() % 6 (0,1,2,3,4,5)
    //  14   + 0    startNumber + 0
    //  14   + 1    startNumber + 1
    //  14   + 2    startNumber + 2
    //  14   + 3    startNumber + 3
    //  14   + 4    startNumber + 4
    //  14   + 5    startNumber + 5
    if (startNumber > endNumber)
    {
        cout << "Số bắt đầu phải nhỏ hơn số kết thúc!" << endl;
    }
    else
    {
        int randomNumber    = (int) (rand() % range) + startNumber;
        cout << "Số ngẫu nhiên: " << randomNumber << endl;
    }
    return 0;
    
}