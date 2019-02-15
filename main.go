package main

import (
	"encoding/json"
	"fmt"
	"io/ioutil"
	"net/http"
)

func homepage(w http.ResponseWriter, r *http.Request) {
	index, err := ioutil.ReadFile("./index.html")
	if err != nil {
		fmt.Fprintf(w, "error in reading index: %v\n", err)
		return
	}

	//it's an odd issue, I don't know why this happen
	w.Header().Add("Content-Type", "text/html")
	fmt.Fprintf(w, string(index))
}

type config struct {
	Port string
}

func readPortFromFile() string {
	dat, err := ioutil.ReadFile("./config.json")
	if err != nil {
		panic(err)
	}

	conf := config{Port: ":80"}
	err = json.Unmarshal(dat, &conf)
	if err != nil {
		panic(err)
	}

	return conf.Port

}

func main() {
	fmt.Printf("starting...\n")
	port := readPortFromFile()
	http.HandleFunc("/", homepage)
	http.Handle("/static/", http.StripPrefix("/static/", http.FileServer(http.Dir("static"))))
	err := http.ListenAndServe(port, nil)
	if err != nil {
		fmt.Printf("%v", err)
	}
}
