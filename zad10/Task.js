import React from "react"

const completedStyle = {
    textDecoration: "line-through"
}

var checked=false

class Task extends React.Component {
    constructor(props){
        super(props)
        this.state = {toggle:false}
        this.input = React.createRef()
        this.handleClick = this.handleClick.bind(this)
    }

    handleClick() {
        this.setState(state => ({
            toggle: this.input.current.checked
        }))
    }

    render() {
    if (this.props.filter && this.state.toggle) return ""
    return(
        <div className="taskstyle">
            <input type="checkbox" ref={this.input} onChange={this.handleClick}
            checked={this.state.toggle}/>
            <p style={ this.state.toggle ? completedStyle: null}>
            {this.props.text}</p>
        </div>
        )
    }
}

export default Task