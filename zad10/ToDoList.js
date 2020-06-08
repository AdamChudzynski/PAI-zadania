import React from 'react'

import Task from "./Task"

class ToDoList extends React.Component{

    constructor(props) {
        super(props)
        this.state = {lisr:[]}
    }
    

    render(){
        if (this.props.list.length<1) {
            return <div className="todo-list">Nothing to do</div>
        } else {
            const tasks = this.props.list.map(
            (item) => <Task key={item.key} filter={this.props.filter}
              text={item.text}/>)
            
            return(
            <div className="todo-list">
                {tasks}
            </div>)
        }
        
    }
}

export default ToDoList