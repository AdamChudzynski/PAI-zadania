import React from 'react';

import Filter from "./Filter"
import ToDoList from "./ToDoList"
import NewTask from "./NewTask"

class App extends React.Component{
    constructor() {
        super()
        this.state = {
            list:[], filter:false
        }
        this.addTask = this.addTask.bind(this)
        this.filter=this.filter.bind(this)
    }

    addTask(newlist) {
        this.setState(prevState => {
            return {
                list: newlist
            }
        }
        )
    }

    filter() {
        this.setState({
            filter:!this.state.filter
        })
    }

    render() {
        return(
        <div>
            <h1 className="todo-list">Welcome to my To Do list!</h1>
            <Filter handleFilter={this.filter}></Filter>
            <ToDoList list={this.state.list} filter={this.state.filter}></ToDoList>
            <NewTask addTask={this.addTask} list={this.state.list}></NewTask>
        </div>
        )
    }
}

export default App