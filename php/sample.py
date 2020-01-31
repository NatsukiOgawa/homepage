print("hello !!!")
    # && ($post_id != "164017" || $post_pass != "164017")

string = "&& ($post_id != \"164017\" || $post_pass != \"164017\")"
print(string)

year = 13
gakka = 4
num = 200
for i in range(1, num+1):
    year = str(year)
    gakka = str(gakka)
    i = str(i)
    k = i.zfill(3)
    string = "&& ($post_id != \"{}{}{}\" || $post_pass != \"{}{}{}\")".format(year, gakka, k, year, gakka, k)
    print(string)
