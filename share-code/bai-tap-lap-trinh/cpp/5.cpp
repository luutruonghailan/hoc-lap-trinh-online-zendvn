#include <iostream>
#include <iomanip>

using namespace std;

int main()
{
    int startNumber = 19;
    int endNumber = 22;
    if(startNumber > endNumber) {
        cout << "Số bắt đầu phải nhỏ hơn Số kết thúc";
    }
  
    int randomNumber = (int) (rand() % (endNumber - startNumber + 1)) + startNumber;
         cout << "Số ngẫu nhiên: " << randomNumber << " "; 
    return 0;
    
}